<?php

namespace App\Controllers;

use App\Core\Controller;

class ContatoController extends Controller
{
    public function index()
    {
        $this->view('layouts/header');
        $this->view('contato/contato');
        $this->view('layouts/footer');
    }
}
