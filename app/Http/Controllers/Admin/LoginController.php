<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
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
}
