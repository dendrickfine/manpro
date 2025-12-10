<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manajemen ZIS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-blue-50 to-blue-100">
    <div class="min-h-screen flex flex-col justify-center items-center px-4">
        <div class="text-center max-w-2xl">
            <div class="mb-8">
                <h1 class="text-6xl font-bold text-blue-600 mb-4">
                    <i class="fas fa-hand-holding-heart"></i> Manajemen ZIS
                </h1>
                <p class="text-xl text-gray-600 mb-2">Sistem Manajemen Zakat, Infak, dan Sedekah</p>
                <p class="text-gray-500">Kelola ZIS secara profesional dan terukur dengan mudah</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white rounded-lg shadow p-6">
                    <i class="fas fa-users text-blue-600 text-3xl mb-3"></i>
                    <h3 class="font-semibold text-gray-800 mb-2">Kelola Muzakki</h3>
                    <p class="text-sm text-gray-600">Manage daftar pembayar zakat dengan mudah</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <i class="fas fa-people-roof text-green-600 text-3xl mb-3"></i>
                    <h3 class="font-semibold text-gray-800 mb-2">Kelola Mustahik</h3>
                    <p class="text-sm text-gray-600">Manage daftar penerima zakat secara terstruktur</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <i class="fas fa-chart-line text-orange-600 text-3xl mb-3"></i>
                    <h3 class="font-semibold text-gray-800 mb-2">Laporan Lengkap</h3>
                    <p class="text-sm text-gray-600">Lihat laporan ZIS masuk dan penyaluran secara detail</p>
                </div>
            </div>

            <div class="space-y-3 space-x-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-medium">
                        <i class="fas fa-chart-line mr-2"></i> Buka Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-medium">
                        <i class="fas fa-sign-in-alt mr-2"></i> Login
                    </a>
                    <a href="{{ route('register') }}" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-gray-100 border border-blue-600 transition font-medium">
                        <i class="fas fa-user-plus mr-2"></i> Daftar
                    </a>
                @endauth
            </div>

            
        </div>
    </div>
</body>
</html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />



        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
