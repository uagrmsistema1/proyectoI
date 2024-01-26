@extends('layouts.plantilla')

@section('title', 'Cursos')


@section('content')

<h2>Crear Cuenta</h2>

<form action="/register" method="post">
    <label for="username">Nombre Completo:</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br>

    <label for="confirmPassword">Confirmar Contraseña:</label><br>
    <input type="password" id="confirmPassword" name="confirmPassword" required><br>

    <input type="submit" value="Register">
</form>

@endsection


