<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premios Literatura</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script language="JavaScript">
    <!-- Disable
    function disableselect(e){
    return false
    }
    function reEnable(){
    return true
    }
    //if IE4+
    document.onselectstart=new Function ("return false")
    document.oncontextmenu=new Function ("return false")
    //if NS6
    if (window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
    }
    //-->
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
              <div>
                <embed id="frame_pdf" name="frame_pdf" width="1000" height="1000" style="pointer-events:auto;" src="Desarrollo de aplicaciones web.pdf#toolbar=0"></embed>
              </div>
          </div>
        </div>
    </form>
  </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
          Swal.fire(
          '¡Guardado!',
          'Su comentario ha sido guardado correctamente',
          'success'
        )
      } 
    })
  });
</script>
</body>
</html>