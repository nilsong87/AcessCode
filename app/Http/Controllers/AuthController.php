<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida, redireciona para a página de manutenção
            return redirect()->route('manutencao');
        }

        // Autenticação falhou, redireciona de volta para a página de login com erros
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showManutencao()
    {
        return view('manutencao.manutencao');
    }
}