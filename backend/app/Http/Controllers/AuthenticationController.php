<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Requests\AuthenticationRequest;
use App\Http\Resources\AuthenticationResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class AuthenticationController
 * @package App\Http\Controllers
 * @group Authentication
 */
class AuthenticationController extends Controller
{
    /**
     * Login
     * @param AuthenticationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(AuthenticationRequest $request)
    {
        $credentials = $request->only('email', 'password');

        // Cek kredensial
        if (!Auth::attempt($credentials)) {
            return ApiResponse::error('Email atau password salah', 401);
        }

        $user = Auth::user();


        if (!$request->validated()) {
            return ApiResponse::error('Validation failed', 422, $request->errors());
        }

        // $token = $user->createToken('auth_token')->plainTextToken;

        return ApiResponse::success(new AuthenticationResource($user), 'Login successful');
    }

    /**
     * Logout
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::logout();
        return ApiResponse::success(null, 'Logout successful');
    }

    /**
     * Delete User
     * @param AuthenticationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function destroy(AuthenticationRequest $request)
    {
        $user = $request->user();

        $user->delete();

        return ApiResponse::success(null, 'User deleted successfully');
    }
}
