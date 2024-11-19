<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManutencaoLoginController extends Controller
{
    public function index()
    {
        return view('manutencao-login');
    }
}
