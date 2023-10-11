<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\RegisterService;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function __construct(public RegisterService $service)
    {}

    public function register(RegisterRequest $request): JsonResponse
    {
        return $this->service->register($request->validated());
    }
}
