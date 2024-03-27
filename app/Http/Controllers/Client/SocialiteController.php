<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $socicalUser = Socialite::driver('google')->user();
        $registedUser = User::where('google_id', $socicalUser->id)->first();
        if (!$registedUser) {
            $user = User::updateOrCreate([
                'google_id' => $socicalUser->id,
            ], [
                'name' => $socicalUser->name,
                'email' => $socicalUser->email,
                'password' => Hash::make('123456789'),
                'google_token' => $socicalUser->token,
                'google_refresh_token' => $socicalUser->refreshToken
            ]);

            Auth::login($user);
            return redirect()->route('home.index')->with('success', 'Bạn đã đăng nhập thành công');
        }

        Auth::login($registedUser);
        return redirect()->route('home.index')->with('success', 'Bạn đã đăng nhập thành công');
    }
}
