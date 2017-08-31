<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Socialite;
use App\Http\Controllers\Controller;
class SocialController extends Controller
{
  /**
   * Redirect the user to the GitHub authentication page.
   *
   * @return Response
   */
  public function redirectToProvider()
  {
    return Socialite::driver('twitter')->redirect();
  }

  /**
   * Obtain the user information from GitHub.
   *
   * @return Response
   */
  public function handleProviderCallback()
  {
    $user = Socialite::driver('twitter')->user();

  }
}
