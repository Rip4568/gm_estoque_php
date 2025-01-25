<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gambiarra Motos - Controle de Estoque</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-amber-50">
    <!-- Navbar -->
    <nav class="bg-amber-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <span class="text-white text-xl font-bold">Gambiarra Motos</span>
            <div class="text-white">
                <a href="#" class="px-4 py-2 hover:text-amber-200">Login</a>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="max-w-7xl mx-auto p-8">
        <!-- Cards Informativos -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-amber-600">
                <h3 class="text-amber-800 font-bold">Total em Estoque</h3>
                <p class="text-3xl font-bold text-gray-700">150</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-amber-600">
                <h3 class="text-amber-800 font-bold">Movimentações Hoje</h3>
                <p class="text-3xl font-bold text-gray-700">12</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-amber-600">
                <h3 class="text-amber-800 font-bold">Alertas</h3>
                <p class="text-3xl font-bold text-gray-700">3</p>
            </div>
        </div>

        <!-- Seção de Ações e Movimentações -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Ações Rápidas -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-amber-800 mb-4">Ações Rápidas</h2>
                <div class="space-y-3">
                    <button class="w-full bg-amber-600 text-white p-3 rounded hover:bg-amber-700">
                        Registrar Entrada
                    </button>
                    <button class="w-full bg-amber-600 text-white p-3 rounded hover:bg-amber-700">
                        Registrar Saída
                    </button>
                    <button class="w-full bg-amber-600 text-white p-3 rounded hover:bg-amber-700">
                        Fazer Inventário
                    </button>
                </div>
            </div>

            <!-- Últimas Movimentações -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-amber-800 mb-4">Últimas Movimentações</h2>
                <div class="space-y-2">
                    <div class="p-2 border-b">
                        <p class="text-gray-700">Entrada: 10 Filtros de Óleo</p>
                        <small class="text-gray-500">Hoje às 14:30</small>
                    </div>
                    <div class="p-2 border-b">
                        <p class="text-gray-700">Saída: 2 Pneus Aro 17</p>
                        <small class="text-gray-500">Hoje às 13:15</small>
                    </div>
                    <div class="p-2 border-b">
                        <p class="text-gray-700">Entrada: 5 Correntes</p>
                        <small class="text-gray-500">Hoje às 11:45</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
