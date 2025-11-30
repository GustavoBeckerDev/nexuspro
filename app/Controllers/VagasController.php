<?php

namespace App\Controllers;

use App\Core\Controller;

class VagasController extends Controller
{
    public function index()
    {
        $this->view('layouts/header');
        $this->view('vagas/vagas');
        $this->view('layouts/footer');
    }
    
}