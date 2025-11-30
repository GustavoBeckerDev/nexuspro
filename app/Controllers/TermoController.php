<?php
namespace App\Controllers;
use App\Core\Controller;

class TermoController extends Controller{   
    function index()
    {
        $this->view('layouts/header');
        $this->view('termos/termo');
        $this->view('layouts/footer');
    }

}