<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('dashboard.index');
        }
        return view('admin.auth.index');
    }

    public function create(AdminStoreRequest $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password, 'role' => 1])) {
            return redirect()->route('dashboard.index');
        }
        return redirect()->route('admin.index')->with('error', "Đăng nhập thất bại");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate(true);

        $cookieNames = [$request->session()->getName(), Auth::getRecallerName()];
        foreach ($cookieNames as $cookieName) {
            cookie()->queue(cookie()->forget($cookieName));
        }

        return redirect('/admin');
    }
}
