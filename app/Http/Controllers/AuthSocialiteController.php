<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;



class AuthSocialiteController extends Controller
{
    public function authRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function authCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'password' => Hash::make('rahasia123'),
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
