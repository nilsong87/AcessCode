<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <title>Acess Code - Manutenção</title>
    <style>
        .file-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .file-item .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
