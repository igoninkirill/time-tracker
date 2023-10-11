<?php

namespace App\Services\Auth;

use Illuminate\Http\JsonResponse;

class LoginService
{
    public function login(array $data): JsonResponse
    {
        if (!$token = auth()->attempt($data)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
    }

    public function logout(): JsonResponse
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer'
        ]);
    }
}
