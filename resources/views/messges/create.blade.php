@extends('layout')


@section('contenido')
    <h1>Contactos</h1>

    <h2>Escribeme</h2>
    @if(session()->has('info'))
        <h3>{{ session('info') }}</h3>
    @else
        <form method="POST" action="{{ route('messages.store') }}">
            {!! csrf_field() !!}
            <p><label for="nombre">
                    Nombre
                    <input type="text" name="nombre" value="{{old('nombre')}}">
                    {!! $errors->first('nombre', '<span class=error>:message</span>') !!} {{old('nombre')}}
                </label></p>
            <p></p><label for="email">
                Email
                <input type="text" name="email" value="{{old('email')}}">
                {!! $errors->first('email', '<span class=error>:message</span>') !!}}
            </label></p>
            <p></p><label for="mensaje">
                Mensaje
                <textarea name="mensaje" >{{old('mensaje')}}</textarea>
                {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}}
            </label></p>
            <input type="submit" value="enviar">

        </form>
    @endif
@stop
