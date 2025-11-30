<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view('layouts/header');
        $this->view('home/home');
        $this->view('layouts/footer');
    }
}
