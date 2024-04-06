<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;
use App\Mail\mailDefaultPass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            'google_id' => $googleUser->id,
            'email' => $googleUser->email,
            'password' => Hash::make($googleUser->name . "absensi-app"),
            'google_token' => $googleUser->token,
        ]);


        Auth::login($user);

        return redirect('/dashboard');
    }
}
