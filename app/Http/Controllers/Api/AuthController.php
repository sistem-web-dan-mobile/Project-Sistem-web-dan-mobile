<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Contracts\AuthContract;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthContract $authService)
    {
        $this->authService = $authService;
    }

    // Register
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = $this->authService->register($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully',
            'data' => $user
        ], 201);
    }

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $result = $this->authService->login(
            $request->only('email', 'password')
        );

        if (!$result) {
            throw ValidationException::withMessages([
                'email' => ['Invalid credentials'],
            ]);
        }

        return response()->json([
            'status' => 'success',
            'token' => $result['token']
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        $this->authService->logout();

        return response()->json([
            'status' => 'success',
            'message' => 'Logout successful'
        ]);
    }
}