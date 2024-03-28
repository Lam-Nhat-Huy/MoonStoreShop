<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetStoreRequest;
use App\Http\Requests\ResetStoreRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\StoreLoginRequest;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('client.auth.login');
    }

    public function postLogin(StoreLoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 0])) {
            return redirect()->route('home.index');
        }
        return redirect()->route('login.index')->with('error', "Đăng nhập thất bại");
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('home.index');
        }
        return view('client.auth.register');
    }

    public function postRegister(UserStoreRequest $request)
    {
        $request->merge(['password' => Hash::make($request->password)]);
        try {
            User::create($request->all());
        } catch (\Throwable $e) {
            Log::error('Có lỗi khi tạo người dùng: ' . $e->getMessage());
        }

        return redirect()->route('login.index')->with('success', 'Chúc mừng bạn đã đăng ký thành công');
    }

    public function logout()
    {
        try {
            Auth::logout();
        } catch (\Throwable $e) {
            Log::error('Có lỗi đã xảy ra: ' . $e->getMessage());
        }
        return redirect()->back();
    }

    public function forget()
    {
        return view('client.auth.forget');
    }

    public function forgetPassword(ForgetStoreRequest $request)
    {
        $user = User::where('email', '=', $request->get('email'))->first();

        if (!empty($user)) {
            $user->remember_token = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', 'Please check your email and reset your password');
        } else {
            return redirect()->back()->with('error', 'Email not found');
        }
    }

    public function reset($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)) {
            $data['user'] = $user;
            return view('client.auth.reset', $data);
        } else {
            abort(404);
        }
    }

    public function resetPost($token, ResetStoreRequest $request)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user)) {
            if ($request->password == $request->cpassword) {
                $user->password = Hash::make($request->password);
                if (empty($user->email_verified_at)) {
                    $user->email_verified_at = now();
                }
                $user->remember_token = Str::random(40);
                $user->save();

                return redirect()->route('login.index')->with('success', 'Password successfuly reset');
            } else {
                return redirect()->back()->with('error', 'Password does not match');
            }
        } else {
            abort(404);
        }
    }
}
