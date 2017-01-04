<?php

namespace App\Http\Controllers;

use App\User as User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {

      // 1 verificar se o utilizador ja existe na base de dados com facebook_id
      // 2 Se nao existir, criar um utilizador
      // 3 Login deste utilizador na aplicação

      try
      {
          $socialUser = Socialite::driver('facebook')->user();
      }
      catch (Exception $e)
      {
          return redirect('/');
      }

      $user = User::where('facebook_id', $socialUser->getId())->first();
      if(!$user)
        User::create([
          'facebook_id' => $socialUser->getId(),
          'name' => $socialUser->getName(),
          'email' => $socialUser->getEmail(),
        ]);

        auth()->login($user);

        return redirect()->to('/home');
        //$user->token;

        //echo $user->getName();
        //echo "<br/>";
        //echo $user->getEmail();
        //echo "<br/>";
        //echo "<img src='" . $user->getAvatar() . "'>";
    }
}
