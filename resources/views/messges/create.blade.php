<x-app-layout>
    <h1 class="text-3xl mb-2">Contactos</h1>

    <h2 class="text-2xl text-gray-600 mb-2">Escribeme</h2>
    @if(session()->has('info'))
        <h3>{{ session('info') }}</h3>
    @else
        <form method="POST" action="{{ route('mensajes.store') }}">
            @csrf
            <p><label for="nombre" class="text-lg">
                    Nombre
                    <input class="block w-64 h-12 border-none rounded-md bg-gray-300 mb-1 p-3" type="text" name="nombre" placeholder="Juanito Perez" value="{{old('nombre')}}">
                    {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
                </label></p>
            <p></p><label for="email">
                Email
                <input class="block w-64 h-12 border-none rounded-md bg-gray-300 mb-1 p-3" type="email" placeholder="email@example.com" name="email" value="{{old('email')}}">
                {!! $errors->first('email', '<span class=error>:message</span>') !!}
            </label></p>
            <p></p><label for="mensaje">
                Mensaje
                <textarea class="block border-none rounded-md bg-gray-300 mb-1 p-2 w-64 h-36" name="mensaje" placeholder="Hola, te quiero mucho..." >{{old('mensaje')}}</textarea>
                {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
            </label></p>
            <input
                type="submit"
                value="enviar"
                class="w-20 h-8 mt-5 bg-blue-500 rounded-2xl text-gray-200"
            >

        </form>
    @endif
</x-app-layout>
