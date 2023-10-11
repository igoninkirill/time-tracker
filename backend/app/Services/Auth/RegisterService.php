<?php

namespace App\Services\Auth;

use App\Http\Resources\User\BaseUserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class RegisterService
{
    public function register(array $data): JsonResponse
    {
        $user = User::create($data);
        return response()->json(['message' => 'User registered successfully',
            'user' => new BaseUserResource($user)], 201);

    }
}
