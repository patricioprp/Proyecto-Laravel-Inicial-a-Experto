@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
    <h2>Escribeme</h2>
    @if(session()->has('info'))
    {{ session('info') }}
    @else
    <form method = "POST" action = "contacto">

        <label for = "nombre">
            Nombre
            <input type = "text" name = "nombre" value = {{ old('nombre') }}>
            {!!$errors->first('nombre','<span class=error>:message</span>') !!}
        </label>
<p></p>
        <label for = "email">
            Email
            <input type = "email" name = "email">
            {!! $errors->first('email','<span class=error>:message</span>') !!}
        </label>
<P></P>
        <label for = "mensaje">
            mensaje
            <textarea name = "mensaje"> </textarea>
            {!! $errors->first('mensaje','<span class=error>:message</span>') !!}
        </label>
<P></P>
        <input type = "submit" value = "Enviar">

    </form>
    @endif
<hr />
@endsection