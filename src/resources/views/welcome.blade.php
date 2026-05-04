<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Sekolah</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center">

    <div class="w-full max-w-md">
        <div class="bg-white/90 backdrop-blur p-8 rounded-2xl shadow-2xl">

            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">
                    Sistem Sekolah
                </h1>
                <p class="text-gray-500 text-sm">
                    Silakan login untuk melanjutkan
                </p>
            </div>

            <livewire:auth.login />

        </div>

        <p class="text-center text-white text-sm mt-4 opacity-80">
            © {{ date('Y') }} Sistem Sekolah
        </p>
    </div>

    @livewireScripts
</body>
</html>