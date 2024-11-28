<?php

namespace App\Middleware;

class Auth
{
    public function handle($request, \Closure $next)
    {
        // Verifica se o usuário está autenticado
        if (!isset($_SESSION['user'])) {
            // Redireciona para a página de login se não estiver autenticado
            return redirect()->route('login');
        }

        // Permite que a solicitação continue
        return $next($request);
    }
}