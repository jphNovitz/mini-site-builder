<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Business card</title>
</head>
<body>

<main class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <a href="{{route('logout')}}">Déconnexion</a>
    @yield('content')
</main>

</body>
</html>
