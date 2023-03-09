@extends('layout')
@section('titulo', 'Premios PBAL')
@section('contenido')
    <div  class="container">
      <div>
      <center>@include('parciales.intro')</center>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <hr>
      </div>
      <div>
        <table class="table table-bordered table-hover border-dark">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Folio</th>
              <th class="text-center">Fecha de registro</th>
              <th class="text-center">Seudónimo</th>
              <th class="text-center">Acción</th>
            </tr>
          </thead>
          <tbody>
          @foreach($participantes as $listado)
          
                  <!-- ($libro_participantes as $libro) -->
          <tr>
              <td>{{$listado->id}}</td>
              <td>{{$listado->folio}}</td>
              <td>{{$listado->pseudonimo}}</td>
              <td>{{$listado->fecha_registro}}</td>
              <td><center><a class="btn btn-primary" href="{{ (isset($listado->libro->ruta_archivo))?$listado->libro->ruta_archivo:'' }}">{{ $listado->libro->nombre_libro }}" target="blank_">Ver</a></center></td>
          </tr>    
          @endforeach
          </tbody>
        </table>
      </div>  
    </div>
@endsection
