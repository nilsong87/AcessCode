<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "Página inicial dos usuários (acessível a todos).";
    }

    public function profile()
    {
        return "Perfil do usuário (acessível apenas a usuários autenticados).";
    }
}