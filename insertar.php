<?php

  include("conexion.php");

  $sql = 'INSERT INTO DATOS_CURSOS (Nombre, Descripción, Horas, FechaInicio, FechaFin) VALUES (:nom, :des, :hor, :fecini, :fecfin)';

  $registros=$base->prepare($sql);

  $registros->execute([":nom" => $_GET["Nom"], ":des"=> $_GET["Des"], ":hor"=>$_GET["Hor"], ":fecini"=>$_GET["FecIni"], ":fecfin"=>$_GET["FecFin"]]);

  Header("Location:index.php");

?>