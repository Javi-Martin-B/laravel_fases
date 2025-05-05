<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen space-y-4">
        <h1 class="text-3xl font-bold text-orange-600">Bienvenido</h1>

        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="px-6 py-3 bg-orange-500 text-white font-bold rounded hover:bg-orange-600">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="px-6 py-3 bg-gray-200 text-orange-800 font-bold rounded hover:bg-gray-300">Registrarse</a>
        </div>
    </div>
</x-guest-layout>
