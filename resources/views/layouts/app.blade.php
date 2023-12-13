<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>@yield('title')</title>
</head>

<body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-sky-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <a href="{{ route('home.index') }}">
                <h2 class="text-2xl font-bold">
                    Register Login System
                </h2>
            </a>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if (auth()->check())
                <li class="mx-8">
                    <p class="text-xl">Welcome <b>{{ auth()->user()->name }}</b></p>
                </li>
                <li>
                    <a href="{{ route('login.destroy') }}"
                        class="font-bold hover:text-white-700 bg-red-500 hover:bg-red-600 py-3 px-4 rounded-md">Log
                        Out</a>
            @else
                <li class="mx-6">
                    <a href="{{ route('register.index') }}"
                        class="font-semibold hover:bg-sky-700 py-3 px-4 rounded-md">Register</a>
                </li>
                <li>
                    <a href="{{ route('login.index') }}"
                        class="font-semibold border-2 boder-white hover:text-sky-700 hover:bg-white py-2 px-4 rounded-md">Log
                        In</a>
            @endif
            </li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>
