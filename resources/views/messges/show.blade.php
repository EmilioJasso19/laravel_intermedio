<x-app-layout>
    <h1 class="text-3xl">Mensaje</h1>
    <p class="mt-2">Enviado por {{ $mensaje->nombre }} - {{ $mensaje->email }}</p>
    <p class="mt-2">{{ $mensaje->mensaje }}</p>
</x-app-layout>
