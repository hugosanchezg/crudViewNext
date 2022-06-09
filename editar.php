
<?php

  include("conexion.php");

  $sql="UPDATE DATOS_CURSOS SET Nombre=:nom, Descripción=:des, Horas=:hor, FechaInicio=:fecini, FechaFin=:fecfin WHERE Id=:id";

  $resultado=$base->prepare($sql);

  $resultado->execute([":nom"=>$_POST["nombre"], ":des"=>$_POST["descripcion"], ":hor"=>$_POST["horas"], ":fecini"=>$_POST["fechainicio"], ":fecfin"=>$_POST["fechafin"], ":id"=>$_GET["Id"]]);

  Header("Location:index.php");

?>