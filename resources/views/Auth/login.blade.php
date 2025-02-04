<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Acess Code - Página de Manutenção">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite('resources/css/manutencao.css')
    @vite('resources/js/script.js')
    <title>Acess Code - Login / Manutenção</title>
</head>
<body class="bg-black">
<div class="container border-green">
    <div class="header-app5">
        <a href="/"><img class="img-logo4" src="{{ Vite::asset('resources/assets/image/logo-positivo-fotor-2024100820480.jpg') }}" alt="Logo do AcessCode"></a>
        <div class="fonte4">
            <p class="titulo-pagm">Manutenção da Página</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1 class="titulo-log text-center" translate="no">Acess Code - Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </div>
</div>
    <br>
    <div class="d-flex justify-content-center">
        <img class="tema border-green" src="{{ Vite::asset('resources/assets/image/manutenção.jpg') }}" alt="Programadores com deficiência auditiva">
    </div>

    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    window.addEventListener('load', function() {
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    });
  </script>

</body>
</html>
