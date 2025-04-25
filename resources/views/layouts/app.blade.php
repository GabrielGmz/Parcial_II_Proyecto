<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ReserPlace')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-white shadow-md p-4 flex justify-between items-center">
        <a href="/" class="text-xl font-bold text-pink-600">Airbnb</a>
        <div class="space-x-4">
            <a href="#" class="text-gray-600 hover:text-pink-600">Explorar</a>
            <a href="#" class="text-gray-600 hover:text-pink-600">Mis Reservas</a>
            <a href="#" class="text-gray-600 hover:text-pink-600">Perfil</a>
        </div>
    </nav>


    <main class="p-6 max-w-7xl mx-auto">
        @yield('content')
    </main>

    <footer class="text-center py-4 text-sm text-gray-500 mt-10">
        © {{ date('Y') }} Airbnb Clone. Todos los derechos reservados.
    </footer>

</body>
</html>
