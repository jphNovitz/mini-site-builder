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

<main class="mx-auto max-w-6xl px-5 py-8 sm:px-6 sm:py-10 lg:px-8 lg:py-14 border-l border-r border-gray-200 ">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 mb-6">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <div>
                <a href="{{ route('admin.cards.index') }}" class="flex items-center">
                <span
                    class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Business Card Admin</span>
                </a>
            </div>


            <div>
                <a href="{{ route('logout') }}"
                   class="text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 rounded-lg text-sm px-4 py-2.5 mr-2">Déconnexion</a>
            </div>
        </div>

    </nav>
    @yield('content')
</main>

</body>
</html>
