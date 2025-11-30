<?php

namespace App\Middleware;

class AuthMiddleware 
{
    public function handle()
    {
        session_start();

        if (!isset($_SESSION['user'])) {
            header('Location: /?modal=login');
            exit;
        }
    }
}