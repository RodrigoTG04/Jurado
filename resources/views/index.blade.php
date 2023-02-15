<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Comentario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, skrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <font color="#20B2AA"><h2>Jurado</h2></font>
    <form action="{{ route('guardar') }}" method="POST">
        @csrf
        <div class="form-group row">
          <div class="col-md-12">
            <div clas="col-md-6">
              <textarea name="comentarios" cols="80" rows="20" placeholder="Capture aquí sus comentarios"></textarea>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
            <div class="col-md-6">
              <iframe id="PDF" title="PDF" width="1000" height="1500" src="https://libros.metabiblioteca.org/bitstream/001/591/1/004%20Desarrollo%20de%20aplicaciones%20web.pdf"></iframe>   
            </div>
          </div>
        </div>
    </form>
  </div>
</body>
</html>
