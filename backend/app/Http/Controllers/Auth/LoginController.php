<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function __construct(public LoginService $service)
    {}

    public function login(LoginRequest $request): JsonResponse
    {
        return $this->service->login($request->validated());
    }

    public function logout(): JsonResponse
    {
        return $this->service->logout();
    }
}
