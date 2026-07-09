<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Scripts -->
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background: radial-gradient(circle at 20% 20%, rgba(59,130,246,0.16), transparent 24%), radial-gradient(circle at 85% 20%, rgba(14,165,233,0.14), transparent 22%), linear-gradient(180deg, #020617 0%, #0f172a 100%); color: #0f172a;">
            <div class="mb-6">
                <a href="/">
                    <x-application-logo class="w-120 h-20 fill-current text-white" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/95 shadow-xl shadow-slate-900/20 backdrop-blur-sm overflow-hidden sm:rounded-3xl auth-card" style="color:#0f172a;">
                {{ $slot }}
            </div>
        </div>
        <style>
            .auth-card .underline { color:#1d4ed8 !important; }
            .auth-card p, .auth-card label, .auth-card span, .auth-card h1, .auth-card h2, .auth-card h3, .auth-card h4, .auth-card h5, .auth-card h6 { color:#0f172a !important; }
            .auth-card input[type="email"], .auth-card input[type="password"] { color:#0f172a !important; }
            .auth-card input::placeholder { color:#6b7280 !important; }
            .auth-card button[type="submit"] { background-color: #0f172a !important; color: #f8fafc !important; border-color: transparent !important; }
            .auth-card button[type="submit"]:hover { background-color: #111827 !important; }
        </style>
    </body>
</html>
