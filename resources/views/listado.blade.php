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
            <tr>
              <td class="text-center">1</td>
              <td class="text-center">QW-9645</td>
              <td class="text-center">13/02/2023</td>
              <td class="text-center">Angel Cólon</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td class="text-center">ER-1621</td>
              <td class="text-center">13/02/2023</td>
              <td class="text-center">Egoitz Cólon</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td class="text-center">TY-2655</td>
              <td class="text-center">13/02/2023</td>
              <td class="text-center">Paul Perez</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td class="text-center">UI-2545</td>
              <td class="text-center">13/02/2023</td>
              <td class="text-center">Jose Luis Peña</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td class="text-center">OP-4004</td>
              <td class="text-center">13/02/2023</td>
              <td class="text-center">Samuel Suárez</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td class="text-center">AS-1872</td>
              <td class="text-center">14/02/2023</td>
              <td class="text-center">Jesús Álvarez</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">7</td>
              <td class="text-center">DF-9394</td>
              <td class="text-center">14/02/2023</td>
              <td class="text-center">Asier Martín</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">8</td>
              <td class="text-center">GH-6441</td>
              <td class="text-center">14/02/2023</td>
              <td class="text-center">Sergi Guerrero</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">9</td>
              <td class="text-center">JK-1867</td>
              <td class="text-center">14/02/2023</td>
              <td class="text-center">Marcos Jiménez</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
            <tr>
              <td class="text-center">10</td>
              <td class="text-center">LZ-1896</td>
              <td class="text-center">14/02/2023</td>
              <td class="text-center">Marcos Peña</td>
              <td class="text-center"><a href="{{ route('captura.jurado') }}">Ver</a></td>
            </tr>
          </tbody>
        </table>
      </div>  
    </div>
@endsection


