<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gambiarra Motos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-amber-50">
    <!-- Navbar -->
    <nav class="bg-amber-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <span class="text-white text-xl font-bold">Gambiarra Motos</span>
        </div>
    </nav>

    <!-- Container do Login -->
    <div class="min-h-screen flex items-center justify-center -mt-16">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold text-amber-800 mb-6 text-center">Acesso ao Sistema</h2>

            <form class="space-y-6">
                <!-- Campo Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
                        placeholder="seu@email.com">
                </div>

                <!-- Campo Senha -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent"
                        placeholder="••••••••">
                </div>

                <!-- Lembrar-me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Lembrar-me</label>
                    </div>
                    <a href="#" class="text-sm text-amber-600 hover:text-amber-800">Esqueceu a senha?</a>
                </div>

                <!-- Botão Login -->
                <button type="submit"
                    class="w-full bg-amber-600 text-white py-2 px-4 rounded-md hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                    Entrar
                </button>
            </form>
        </div>
    </div>
</body>

</html>
