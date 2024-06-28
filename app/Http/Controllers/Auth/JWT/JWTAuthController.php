<?php

namespace App\Http\Controllers\Auth\JWT;

use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\GeneralResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTAuthController extends Controller
{
    /**
     * Login
     * 
     * Supaya dapat menggunakan endpoint lainnya, pengguna wajib login.
     * Jika pengguna login sebanyak 3 kali maka akan cooldown selama 1 menit.
     * 
     * @bodyParam email string required Email user, Example: ucupjago@gaming.yt
     * @bodyParam password string required Password user, Example: ucupgggaming
     * 
     * @response 200 scenario=success 
     * {
     *       "user": {
     *           "name": "Test User",
     *           "email": "test@example.com"
     *       },
     *       "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL3YxL2xvZ2luIiwiaWF0IjoxNzE5NTU3NjEyLCJleHAiOjE3MTk1NjEyMTIsIm5iZiI6MTcxOTU1NzYxMiwianRpIjoiRURmc1ZnUThvMTFSWGdLNyIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.b_F6Wuuo_l0a18mMoHjs5AwmJ0weXeyuNP-oKMQjbbA"
     *   }
     * 
     * @response 401 scenario="Invalid email or password"
     * {
     *     "status": "fail",
     *     "message": "Invalid credentials",
     *     "data": []
     * }
     * 
     * @response 429 scenario="Too many requests" 
     * {
     *     "status": "fail",
     *     "message": "Too many requests",
     *     "data": []
     *  }
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

        $payload = [
            'user_id'=> $user->id,
            'name'=> $user->name,
            'email'=> $user->email,
        ];

        // Generate token
        $token = auth('api')->claims($payload)->login($user);
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
     * Logout
     * 
     * Endpoint ini digunakan untuk melakukan logout pengguna saat ini.
     * Ini akan mencabut token akses yang digunakan untuk otentikasi.
     * 
     * @authenticated
     * 
     * @response 200 scenario=success 
     *{
     *  "message": "Logout successful",
     *  "data": []
     * }
     */
    public function logout()
    {
        $removeToken = JWTAuth::invalidate(JWTAuth::getToken());
        if ($removeToken) {
            return new GeneralResource(
                200,
                'Logout successful',
                []
            );
        }
    }

}
