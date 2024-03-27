<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetStoreRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        dd($request->all());
    }
}
