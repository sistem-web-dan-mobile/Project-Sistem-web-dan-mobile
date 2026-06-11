<?php

namespace App\Contracts;

interface AuthContract
{
    public function register(array $data);

    public function login(array $credentials);

    public function logout();
}