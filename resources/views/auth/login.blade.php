<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Login form</title>
</head>
<body>

<main class="bg-gray-50 max-w-md flex flex-col mx-auto my-8 border border-gray-300 rounded p-4">
    <h1 class="text-xl">Form Login</h1>
    <p>Please login</p>
    <form method="POST" action="{{ route('login') }}"
          class="flex flex-col mx-auto mt-8 p-4 space-y-8 ">
        @csrf
        <div class="space-x-4">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="border" required autofocus>
        </div>
        <div class="space-x-4">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="border"required>
        </div>
        <div>
            <button type="submit" class="bg-blue-800 text-blue-50 p-2 rounded-md">Login</button>
        </div>
    </form>
</main>
</body>
</html>
