<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>ViewForma</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">ViewForma</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cursos">Cursos</a>
        </li>
        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Escribe algo..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>

  <!--CONTAINER DIV-->
  <div class="container p-4">

    <h1 class="text-center text-success">ViewForma</h1>
    <p class="text-sm-center">Tu mejor empresa de formación</p>

    <img class="foto d-block m-auto w-100 p-4" src="images/imagen.jpg">

    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempor neque in purus hendrerit elementum. Proin posuere mattis nisi eu accumsan. Vestibulum mollis a enim id pulvinar. Praesent luctus, est sit amet malesuada finibus, ipsum lacus fringilla sem, a sodales augue tortor molestie sem. Vivamus egestas ultricies nulla. Etiam scelerisque viverra nibh ut viverra. Proin pulvinar, enim non pharetra fermentum, turpis turpis eleifend nisi, in gravida odio augue sed leo. In in consequat metus, sit amet mollis libero. Fusce at vestibulum quam, vitae vehicula sem. Nunc fermentum hendrerit congue. Maecenas ipsum enim, elementum suscipit molestie et, convallis sit amet sapien. Praesent venenatis arcu vel varius dapibus. Vestibulum interdum eget libero at commodo. Phasellus non elit ac quam faucibus elementum. Etiam ac vehicula nibh, eu congue ipsum. Ut eu urna ornare, vulputate massa vitae, ullamcorper nisl.</p>
      
    <p class="text-justify">Curabitur dapibus enim eget orci ullamcorper feugiat nec sed justo. Duis semper vitae arcu eget vulputate. Vivamus elementum egestas mattis. Aenean quis eros et ligula luctus efficitur. Morbi nec semper nisi. Donec vitae luctus massa, id gravida mi. Praesent non elementum elit, non tempor quam. Cras nunc mi, ornare non elit sed, hendrerit pellentesque nulla. Praesent gravida urna ut dui commodo, at consectetur tortor ultrices. Donec lectus eros, suscipit blandit diam eu, vestibulum molestie enim. Aliquam ac porta purus. Suspendisse sit amet est id nisi rhoncus auctor vel in turpis. Proin nisl dui, consectetur a mattis eu, posuere a dolor. Nullam interdum varius aliquet.</p>

    <div id="cursos">
      
      <h1 class="text-center">Cursos</h1>
      <img class="foto d-block m-auto w-100 p-4" src="images/curso.jpg">
      
      <!--TABLA-->
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"
      <div class="row table-responsive p-3">
				<table class="table table-striped">
					<thead>
						<tr>
              <th class="primera_fila">#</th>
              <th class="primera_fila">Nombre</th>
              <th class="primera_fila">Descripción</th>
              <th class="primera_fila">Horas</th>
              <th class="primera_fila">Fecha Inicio</th>
              <th class="primera_fila">Fecha Fin</th>
              <th class="primera_fila">Opciones</th>
						</tr>
					</thead>
          <tbody>
            
          <?php
            foreach($registros as $curso):?>

          <tr>

            <td><?php echo $curso->Id?></td>
            <td><?php echo $curso->Nombre?></td>
            <td><?php echo $curso->Descripción?></td>
            <td><?php echo $curso->Horas?></td>
            <td><?php echo $curso->FechaInicio?></td>
            <td><?php echo $curso->FechaFin?></td>
      
            <td class="bot"><a href="borrar.php?Id=<?php echo $curso->Id?>"><input type="button" name="del" id="del" value="Borrar" class="button"></a></td>
            <td class="bot"><a href="edicion.php?Id=<?php echo $curso->Id?> & nom=<?php echo $curso->Nombre?> & des=<?php echo $curso->Descripción?> & hor=<?php echo $curso->Horas?> & fecini=<?php echo $curso->FechaInicio?> & fecfin=<?php echo $curso->FechaFin?>"><input type="button" name="up" id="up" value="Modificar"></a></td>

          </tr> 
          
          <?php
            endforeach;
          ?>
          
            <tr>
              <td></td>
                <td><input type="text" name="Nom" size="10" class="centrado"></td>
                <td><input type="text" name="Des" size="10" class="centrado"></td>
                <td><input type="text" name="Hor" size="10" class="centrado"></td>
                <td><input type="text" name="Fecini" size="10" class="centrado"></td>
                <td><input type="text" name="Fecfin" size="10" class="centrado"></td>
                <td class="bot"><input type="submit" name="cr" id="cr" value="Dar de alta"></td>
            </tr>   
          </tbody>
					
				</table>
        </form>
			</div>
    </div>
  </div>

  <!--FOOTER-->
  <footer class="page-footer font-small bg-light pt-4">

    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 mt-md-0 mt-3">

          <h5 class="text-uppercase">ViewForma</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, mi eu rutrum sagittis.</p>

        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase">Contacto</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Correo electrónico</a>
            </li>
            <li>
              <a href="#!">Teléfono</a>
            </li>
          </ul>

        </div>
        
        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase">Redes</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Twitter</a>
            </li>
            <li>
              <a href="#!">Instagram</a>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="/">ViewForma</a>
    </div>

  </footer>

</body>
</html>