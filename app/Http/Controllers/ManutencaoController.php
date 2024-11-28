<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    public function index()
    {
        return view('manutencao.manutencao');
    }
}

class ManutencaoLoginController extends Controller
{
    public function index()
    {
        return view('manutencao-login');
    }
}