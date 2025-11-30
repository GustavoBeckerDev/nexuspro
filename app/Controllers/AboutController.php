<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $this->view('layouts/header');
        $this->view('about/about');
        $this->view('layouts/footer');
    }
}
