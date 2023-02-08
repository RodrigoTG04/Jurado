<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<html>
    <body>
        <h3>Jurado</h3>
        <form action="{{ route('guardar') }}" method="POST">
            @csrf
            <div class="form-group row">
               <textarea name="comentarios" rows="20" cols="50" placeholder="Capture aquí sus comentarios"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                </div>
            </div>
        </form>
    </body>
</html>
<iframe id="PDF" title="PDF" width="800" height="1000" src="https://libros.metabiblioteca.org/bitstream/001/591/1/004%20Desarrollo%20de%20aplicaciones%20web.pdf"></iframe>