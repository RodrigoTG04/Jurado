<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premios Literatura</title>
  <link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid wrapper">
    <div class="three">
    <h2 style="color:#20B2AA;">Comentario</h2>
    </div>
    <form action="{{ route('guardar') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-5">
              <textarea name="comentarios" cols="80" rows="20" placeholder="Capture aquí sus comentarios"></textarea>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>  
          </div>
          <div class="border-left d-sm-none d-md-block" style="width: 0px;">
          </div>
          <div class="col-md-5" style="margin-left: -1px;">
            <hr class="d-sm-block d-md-none">
              <embed width="1000" height="1000" src="https://libros.metabiblioteca.org/bitstream/001/591/1/004%20Desarrollo%20de%20aplicaciones%20web.pdf#toolbar=0">   
          </div>
        </div>
    </form>
  </div>
</body>
</html>
