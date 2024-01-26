@extends('layouts.plantilla')

@section('title','Registro de Estudiante')

@section('content')
    <h2>Registro Estudiante</h2>

    

    <form class="row g-3">
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Carnet Identidad</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="1668711" required>
            <div class="valid-feedback">
              
        </div>
        <div class="col-md-4">
          <label for="validationServer01" class="form-label">Nombre</label>
          <input type="text" class="form-control is-valid" id="validationServer01" value="Marco" required>
          <div class="valid-feedback">
            
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationServer02" class="form-label">Apellido Paterno</label>
          <input type="text" class="form-control is-valid" id="validationServer02" value="Lopez" required>
          <div class="valid-feedback">
          </div>
        </div>
        
        <div class="col-md-4">
            <label for="validationServer02" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="Villa" required>
            <div class="valid-feedback">
            </div>
        </div>
        
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Lugar de Nacimiento</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="Santa Cruz" required>
            <div class="valid-feedback">
              
        </div><br>

        <label for="">Direccion del Domicilio</label>

        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Municipio</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
            <div class="valid-feedback">
              
        </div>

        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Zona/Villa</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
            <div class="valid-feedback">
              
        </div>

        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Avenida/Calle/Nº</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
            <div class="valid-feedback">
              
        </div>

        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Telefono/Celular</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
            <div class="valid-feedback">
              
        </div>
        
        <div class="col-md-3">
          <label for="validationServer04" class="form-label">Nivel Educacion</label>
          <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Elegir...</option>
            <option>Inicial</option>
            <option>Primaria</option>
            <option>Secundaria</option>
          </select>
          <div id="validationServer04Feedback" class="invalid-feedback">
          </div>
        </div><br>
        <button onclick="navigateToCrearNuevo()">Siguiente</button>

        <script>
            function navigateToCrearNuevo() {
                window.location.href = '{{ route("colegio") }}';
            }
        </script>
        <br>
      </form>
    
@endsection