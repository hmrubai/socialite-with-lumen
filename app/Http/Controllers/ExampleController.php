<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;
use App\Models\User;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function redirectToProvider(Request $request)
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        $user = Socialite::driver('google')->stateless()->user();

        return response(['data' => $user, 'message' => 'Account Featch successfully!', 'status' => true]);
        
        // // OAuth 1.0 providers...
        // $token = $user->token;
        // $tokenSecret = $user->tokenSecret;
        // $expiresIn = $user->expiresIn;

        // // All providers...
        // $user->getId();
        // $user->getNickname();
        // $user->getName();
        // $user->getEmail();
        // $user->getAvatar();

        // return response(['data' => $user, 'message' => 'Account Featch successfully!', 'status' => true]);
    }
}
