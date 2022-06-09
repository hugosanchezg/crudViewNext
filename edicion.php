<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>ViewForma</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="images/prueba.png">
</head>

<body>
  
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand bg-light text-success font-italic font-weight-bold" href="index.php">ViewForma</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="index.php">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php">Gestión</a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Escribe algo..." aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>

  <div class="p-4 text">
       
    <?php
      $Id = $_GET['Id']
    ?>

    <h1 class="text-center pt-4">ACTUALIZAR</h1>
    <img class="foto  w-10 p-4" src="images/update.png">

    <form action="editar.php?Id=<?php echo $Id?>" method="post">
      
      <table border="1" align="center" class="text-center w-25 bg-light">

        <tr>
          <td class="text-info font-weight-bold"><label for="nombre">Nombre</label>
          <input class="d-block m-auto" type="text" name="nombre" id="Nombre" value="<?php echo $_GET['Nombre']?>"></td>
        </tr>

        <tr>
          <td class="text-info font-weight-bold"><label for="descripcion">Descripción</label>
          <input class="d-block m-auto" type="text" name="descripcion" id="Descripción" value="<?php echo $_GET['Descripción']?>"></td>
        </tr>

        <tr>
          <td class="text-info font-weight-bold"><label for="horas">Horas</label>
          <input class="d-block m-auto" type="text" name="horas" id="Horas" value="<?php echo $_GET['Horas']?>"></td>
        </tr>

        <tr>
          <td class="text-info font-weight-bold"><label for="fechainicio">Fecha Inicio</label>
          <input class="d-block m-auto" type="text" name="fechainicio" id="FechaInicio" value="<?php echo $_GET['FechaInicio']?>"></td>
        </tr>

        <tr>
          <td class="text-info font-weight-bold"><label for="fechafin">Fecha Fin</label>
          <input class="d-block m-auto" type="text" name="fechafin" id="FechaFin" value="<?php echo $_GET['FechaFin']?>"></td>
        </tr>
        
        <tr>
        <td class="text-primary"><button type="submit">Enviar</button></td>
        </tr>

      </table>

    </form>

    <p>&nbsp;</p>
  </div>

</body>

<!--FOOTER-->
<hr noshade="noshade" size="3" class="bg-success"/>
  <footer class="page-footer font-small pt-4">
    
    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 mt-md-0 mt-3">

          <h5 class="text-uppercase font-italic font-weight-bold text-success">ViewForma</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, mi eu rutrum sagittis.</p>

        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase">Contacto</h5>

          <ul class="list-unstyled">
            <li>
              <a href="index.php">Correo electrónico</a>
            </li>
            <li>
              <a href="index.php">Teléfono</a>
            </li>
          </ul>

        </div>
        
        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase">Redes</h5>

          <ul class="list-unstyled">
            <li>
              <a href="index.php">Twitter</a>
            </li>
            <li>
              <a href="index.php">Instagram</a>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="index.php/#cursos">ViewForma</a>
    </div>
        <br>
  </footer>
</html>
