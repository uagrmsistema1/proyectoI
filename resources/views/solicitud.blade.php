@extends('layouts.plantilla')

@section('title','Solicitud')

@section('content')
    <h2>Solicitud de Reserva</h2>

    <button onclick="navigateToCrearNuevo()">Agregar</button>

    <script>
        function navigateToCrearNuevo() {
            window.location.href = '{{ route("estudiante") }}';
        }
    </script>
    <br>

    <form action="">
        
        <label for="">
            Solicitudes Registradas: 
        </label><br>
        
        <textarea id="myTextarea" name="myText" rows="4" cols="50"></textarea>
        
    </form>
@endsection