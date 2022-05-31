<?php

    include("conexion.php");

    $Id=$_GET["Id"];
    
    $base->query("DELETE FROM DATOS_CURSOS WHERE ID='$Id'");

    header("Location:index.php");

?>