@extends('layouts.plantilla')

@section('title','Home')

@section('content')
    <h2>Ingresar</h2>
    <form action="/login" method="post">
        <label for="username">Correo Electronico:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Contraceña:</label><br>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Confirmar">
    </form>

    <a href="{{route('solicitud')}}">Ir a Reservar Cupo</a>
@endsection

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>-->
    <!-- favicon -->
    <!-- estilos -->
<!--</head>
<body>-->
    <!-- header -->
    <!-- nav -->
   
  <!--  <h1>Bienvenido a la pagina principal</h1>-->

    <!-- footer -->
    <!-- script -->
<!--</body>
</html>*/