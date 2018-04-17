<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;
use Exception;

class SocialAccountController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information
     *
     * @return Response
     */
    public function handleProviderCallback(SocialAccountService $accountService, $provider)
    {
        try {
            $member = Socialite::with($provider)->user();
        } catch (Exception $e) {
            return redirect('/login');
        }

        $authMember = $accountService->findOrCreate(
            $member,
            $provider
        );

        auth()->login($authMember, true);

        return redirect()->to('/home');
    }
}
