<?php

namespace App\Controllers;

use App\Core\Controller;

class PlanosController extends Controller
{
    public function index()
    {
        $this->view('layouts/header');
        $this->view('planos/planos');
        $this->view('layouts/footer');
    }
}
