<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premios Literatura</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script type='text/javascript'>
  document.oncontextmenu = function(){return false};
</script>
</head>
<body>
  <div class="container-fluid wrapper">
    <div class="three">
    <h2 style="color:#20B2AA;">Comentario</h2>
    </div>
    <form action="{{ route('guardar') }}" method="POST" enctype="multipart/form-data" class="d-inline formulario-comentario">
        @csrf
        <div class="row">
          <div class="col-md-5">
              <textarea name="comentario" cols="80" rows="20" placeholder="Capture aquí sus comentarios" required></textarea>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>  
          </div>
          <div class="border-left d-sm-none d-md-block" style="width: 0px;">
          </div>
          <div class="col-md-5" style="margin-left: -1px;">
            <hr class="d-sm-block d-md-none">
              <div style="overflow:scroll; height:1000px; width:1000px;">
                <iframe id="documento" width="1000" height="1000" style="pointer-events:auto;" src="Desarrollo de aplicaciones web.pdf#toolbar=0"></iframe>
              </div>
          </div>
        </div>
    </form>
  </div>
  <script src="sweetalert2.all.min.js"></script>
  <script>
    $('.formulario-comentario').submit(function(e){
      e.preventDefault();

    Swal.fire({
        title: '¿Está seguro(a) de su comentario?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Guardar'
      }).then((result) => {
        if (result.value) {
            this.submit()
          }
      })
    });
  </script>
</body>
</html>