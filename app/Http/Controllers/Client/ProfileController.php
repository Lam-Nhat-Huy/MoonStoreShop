<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index($id)
    {
        $users = User::find($id);
        return view('client.profile.index', compact('users'));
    }

    public function update(Request $request)
    {
        $data = $request->only('id', 'username', 'email');
        $user = User::find($data['id']);
        // Xử lý hình ảnh chỉ khi người dùng tải lên hình mới
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $imageName);
            $filePath = 'storage/' . $imageName;
            // Xóa hình ảnh cũ nếu tồn tại và không phải là hình mặc định
            if ($user->avatar && !str_contains($user->avatar, 'default_avatar')) {
                Storage::delete('public/' . basename($user->avatar));
            }
            // Cập nhật đường dẫn hình ảnh mới trong cơ sở dữ liệu
            $user->avatar = $filePath;
        }

        // Cập nhật các thông tin khác
        $user->name = $data['username'];
        $user->email = $data['email'];
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
