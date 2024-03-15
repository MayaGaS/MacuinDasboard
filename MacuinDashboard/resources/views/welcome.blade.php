<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src='https://cdn.tailwindcss.com'></script>
</head>
<body>
    <div>
        @include('partials/navbar')
        @include('partials/modalCliente')
        @include('partials/modalAdminPerfil')
    </div>
</body>
</html>