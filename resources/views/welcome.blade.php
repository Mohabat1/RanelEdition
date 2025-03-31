<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добро пожаловать | RanelEdition</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex flex-col min-h-screen">
<nav class="w-full p-4 flex justify-between items-center bg-gray-800 shadow-lg">
    <div class="text-3xl font-extrabold text-white">
        Ranel<span class="text-blue-500">Edition</span>
    </div>
    <div>
        @auth
            <a href="{{ url('/dashboard') }}" class="px-5 py-2 border border-gray-500 text-gray-300 rounded-lg hover:bg-gray-700 transition">
                Личный кабинет
            </a>
        @else
            <a href="{{ route('login') }}" class="px-5 py-2 border border-gray-500 text-gray-300 rounded-lg hover:bg-gray-700 transition">
                Войти
            </a>
            <a href="{{ route('register') }}" class="ml-4 px-5 py-2 border border-gray-500 text-gray-300 rounded-lg hover:bg-gray-700 transition">
                Регистрация
            </a>
        @endauth
    </div>
</nav>

<div class="flex flex-col flex-grow justify-center items-center text-center px-6">
    <h1 class="text-6xl font-extrabold mb-6">
        Добро пожаловать в <span class="text-blue-500">RanelEdition</span>
    </h1>
    <p class="text-lg text-gray-300 max-w-2xl">
        Это место, где вы найдете лучшие возможности, полезные инструменты и уникальный контент. Присоединяйтесь к нам!
    </p>
</div>
</body>
</html>
