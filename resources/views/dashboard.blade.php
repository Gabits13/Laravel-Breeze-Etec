<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Painel Administrativo - ETEC Zona Leste') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <!-- Sidebar -->
            <aside class="w-64 mr-6 bg-white dark:bg-gray-800 rounded-lg shadow">
                <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="font-semibold text-lg text-gray-700 dark:text-gray-300">Menu</h3>
                </div>
                <nav class="p-4 space-y-2">
                    <a href="#" class="block py-2 px-3 rounded-md bg-blue-500 text-white font-medium">Painel Inicial</a>
                    <a href="#" class="block py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">Gerenciar Cursos</a>
                    <a href="#" class="block py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">Gerenciar Departamentos</a>
                    <a href="#" class="block py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">Gerenciar Eventos</a>
                    <a href="#" class="block py-2 px-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700">Gerenciar Usuários</a>
                </nav>
            </aside>

            <!-- Conteúdo principal -->
            <main class="flex-1">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold mb-4">Bem-vindo!</h3>
                        <p class="mb-6">Você está logado! Aqui futuramente você poderá administrar todo o site da ETEC Zona Leste.</p>

                        <!-- Cards resumidos -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="p-4 bg-blue-100 dark:bg-blue-900 rounded shadow">
                                <h4 class="font-semibold">Cursos</h4>
                                <p>4 cadastrados</p>
                            </div>
                            <div class="p-4 bg-green-100 dark:bg-green-900 rounded shadow">
                                <h4 class="font-semibold">Departamentos</h4>
                                <p>3 cadastrados</p>
                            </div>
                            <div class="p-4 bg-yellow-100 dark:bg-yellow-900 rounded shadow">
                                <h4 class="font-semibold">Eventos</h4>
                                <p>2 cadastrados</p>
                            </div>
                            <div class="p-4 bg-red-100 dark:bg-red-900 rounded shadow">
                                <h4 class="font-semibold">Usuários</h4>
                                <p>1 cadastrados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
