<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>ViewForma</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="images/prueba.png">
</head>

<body>

  <?php

    include("conexion.php");
    
    /*$conexion=$base->query("SELECT * FROM DATOS_CURSOS");
    $registros=$conexion->fetchAll(PDO::FETCH_OBJ);*/

    $registros=$base->query("SELECT * FROM DATOS_CURSOS")->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["cr"])){

      $nombre=$_POST["Nom"];
    
      $descripcion=$_POST["Des"];

      $horas=$_POST["Hor"];

      $fechainicio=$_POST["Fecini"];

      $fechafin=$_POST["Fecfin"];

      $sql="INSERT INTO DATOS_CURSOS (NOMBRE, DESCRIPCIÓN, HORAS, FECHAINICIO, FECHAFIN) VALUES(:nom, :des, :hor, :fecini, :fecfin)";

      $resultado=$base->prepare($sql);

      $resultado->execute(array(":nom"=>$nombre, ":des"=>$descripcion, ":hor"=>$horas, ":fecini"=>$fechainicio, ":fecfin"=>$fechafin));

      header("Location:index.php");

    }

  ?>

  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand bg-light text-success font-italic font-weight-bold" href="#">ViewForma</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="#">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#cards">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#cursos">Gestión</a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Escribe algo..." aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>

  <!--CONTAINER DIV-->
  <div class="container p-4">

    <h1 class="text-center text-success font-italic font-weight-bold">ViewForma</h1>

    <p class="text-sm-center">Tu mejor empresa de formación</p>

    <img class="foto d-block m-auto w-100 p-4" src="images/imagen.jpg">

    <h3>Nuestra forma de trabajo está diseñada para ti.</h3>
    
    <section id="cards">
      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempor neque in purus hendrerit elementum. Proin posuere mattis nisi eu accumsan. Vestibulum mollis a enim id pulvinar. Praesent luctus, est sit amet malesuada finibus, ipsum lacus fringilla sem, a sodales augue tortor molestie sem. Vivamus egestas ultricies nulla. Etiam scelerisque viverra nibh ut viverra. Proin pulvinar, enim non pharetra fermentum, turpis turpis eleifend nisi, in gravida odio augue sed leo. In in consequat metus, sit amet mollis libero. Fusce at vestibulum quam, vitae vehicula sem. Nunc fermentum hendrerit congue. Maecenas ipsum enim, elementum suscipit molestie et, convallis sit amet sapien. Praesent venenatis arcu vel varius dapibus. Vestibulum interdum eget libero at commodo. Phasellus non elit ac quam faucibus elementum. Etiam ac vehicula nibh, eu congue ipsum. Ut eu urna ornare, vulputate massa vitae, ullamcorper nisl.</p>
    
      <!--CARDS-->
    
      <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="images/uno.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso top 3</h5>
            <p class="card-text">Curabitur dapibus enim eget orci ullamcorper feugiat nec sed justo.</p>
            <p class="card-text"><small class="text-muted">Last updated 12 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/dos.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso top 2</h5>
            <p class="card-text"><p class="text-justify">Curabitur dapibus enim eget orci ullamcorper feugiat nec sed justo.</p>
            <p class="card-text"><small class="text-muted">Last updated 4 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/tres.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Curso top 1</h5>
            <p class="card-text"><p class="text-justify">Curabitur dapibus enim eget orci ullamcorper feugiat nec sed justo.</p>
            <p class="card-text"><small class="text-muted">Last updated 59 mins ago</small></p>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>

    <div id="cursos">
      
      <h1 class="text-center bg-success text-light">Gestión de Cursos</h1>
      <img class="rounded-circle d-block m-auto w-100 p-4" src="images/curso.jpg">
      <p class="text-justify">Aenean quis eros et ligula luctus efficitur. Morbi nec semper nisi. Donec vitae luctus massa, id gravida mi. Praesent non elementum elit, non tempor quam. Proin nisl dui, consectetur a mattis eu, posuere a dolor. Nullam interdum varius aliquet.</p><br>
      
      <table border="0" align="center" class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Horas</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
      
        <?php
      
        foreach($registros as $registro){

          echo "
            <tr>
              <td>" . $registro->Id . "</td>
              <td>" . $registro->Nombre . "</td>
              <td>" . $registro->Descripción . "</td>
              <td>" . $registro->Horas . "</td>
              <td>" . $registro->FechaInicio . "</td>
              <td>" . $registro->FechaFin . "</td>
              <td><a href='borrar.php?Id=" . $registro->Id . "' ><button name='up' id='up'>Borrar</button></a></td>
              <td><a href='edicion.php?Id=" . $registro->Id . " & Nombre=" . $registro->Nombre . " & Descripción=" . $registro->Descripción . " & Horas=" . $registro->Horas . " & FechaInicio=" . $registro->FechaInicio . " & FechaFin=" . $registro->FechaFin . "' ><button name='del' id='del'>Modificar</button></a></td>
            </tr>
          ";

        }

        

        ?>

        <form action="insertar.php" method="get">
          <tr>
            <td></td>
            <td><input type='text' name='Nom' size='10' class='centrado'></td>
            <td><input type='text' name='Des' size='10' class='centrado'></td>
            <td><input type='number' max=9999 min=0 name='Hor' size='10' class='centrado'></td>
            <td><input type='date' name='FecIni' size='10' class='centrado'></td>
            <td><input type='date' name='FecFin' size='10' class='centrado'></td>
            <td class='bot'><button type='submit' name='cr' id='cr'>Insertar</button></td>
          </tr>
        </form>
      
      </table>
      
      <br>
      <p class="text-justify">Curabitur dapibus enim eget orci ullamcorper feugiat nec sed justo. Duis semper vitae arcu eget vulputate. Vivamus elementum egestas mattis. Aenean quis eros et ligula luctus efficitur. Morbi nec semper nisi. Donec vitae luctus massa, id gravida mi. Praesent non elementum elit, non tempor quam. Cras nunc mi, ornare non elit sed, hendrerit pellentesque nulla. Praesent gravida urna ut dui commodo, at consectetur tortor ultrices. Donec lectus eros, suscipit blandit diam eu, vestibulum molestie enim. Aliquam ac porta purus. Suspendisse sit amet est id nisi rhoncus auctor vel in turpis. Proin nisl dui, consectetur a mattis eu, posuere a dolor. Nullam interdum varius aliquet.</p><br>
			
    </div>
  </div>
  
  

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
      <a href="#cursos">ViewForma</a>
    </div>
        <br>
  </footer>

</body>
</html>