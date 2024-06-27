<?php

namespace App\Http\Controllers\Auth\JWT;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\GeneralResource;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTAuthController extends Controller
{
   /**
    * Login user
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function login(LoginRequest $request)
   {
      // Auth validation
      $credentials = $request->only('email', 'password');
      if (!Auth::guard('api')->attempt($credentials)) {
         throw new GeneralException(
            'Invalid credentials',
            401
         );
      }

      // Get user data
      $user = User::where('email', $request->email)->first();

      // User data
      $data['user'] = [
         'name' => $user->name,
         'email' => $user->email,
      ];

      // Generate token
      $token = auth('api')->login($user);
      $data['access_token'] = $token;

      // Handle email verification (uncomment for verified email validation)
      // if (!$user->email_verified_at) {
      //     throw new GeneralException(
      //         'Email not verified',
      //         401,
      //         $data
      //     );
      // }

      // return response
      return new GeneralResource(
         200,
         'Login successful',
         $data
      );
   }

   /**
    * Logout user
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function logout()
   {
      $removeToken = JWTAuth::invalidate(JWTAuth::getToken());
      if ($removeToken) {
         return new GeneralResource(
            200,
            'Logout successful',
            $data
         );
      }
   }
}