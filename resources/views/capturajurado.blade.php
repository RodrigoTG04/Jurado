<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premios Literatura</title>
  <link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script type='text/javascript'>
  document.oncontextmenu = function(){return false};
</script>
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
              <div style="overflow:scroll; height:auto; width:auto;">
                <!-- object id="documento"
                  type="application/pdf"
                  data="Desarrollo de aplicaciones web.pdf#toolbar=0"
                  style="width: 1000px; height: 1000px;"
                  style="pointer-events:none;">
                </object> -->
              </div>
              <div style="overflow:scroll; height:1000px; width:1000px;">
                <iframe id="documento" width="1000" height="1000" style="pointer-events:none;" src="Desarrollo de aplicaciones web.pdf#toolbar=0"></iframe>
              </div>
          </div>
        </div>
    </form>
  </div>
</body>
</html>