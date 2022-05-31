<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>ViewForma</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <div class="p-4">
    
    <h1 class="text-center pt-4">ACTUALIZAR</h1>

    <?php

      $Id=$_GET["Id"];

    ?>

    <img class="foto d-block m-auto w-10 p-4" src="images/update.png">

    <form name="form1" method="post" action="editar.php?Id=<?php echo $Id?>">
      <table width="25%" border="0" align="center">
        <tr>
          <td></td>
          <td><label for="id"></label>
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>"></td>
        </tr>
        <tr>
          <td><p class="font-weight-bold">Nombre</p></td>
          <td><label for="nom"></label>
          <input type="text" name="nom" id="nom" value="<?php echo $_GET['Nombre']?>"></td>
        </tr>
        <tr>
          <td><p class="font-weight-bold">Descripción</p></td>
          <td><label for="des"></label>
          <input type="text" name="des" id="des" value="<?php echo $_GET['Descripcion'] ?>"></td>
        </tr>
        <tr>
          <td><p class="font-weight-bold">Horas</p></td>
          <td><label for="hor"></label>
          <input type="text" name="hor" id="hor" value="<?php echo $_GET['Horas'] ?>"></td>
        </tr>
        <tr>
          <td><p class="font-weight-bold">Fecha Inic.</p></td>
          <td><label for="fecini"></label>
          <input type="text" name="fecini" id="fecini" value="<?php echo $_GET['FechaInicio'] ?>"></td>
        </tr>
        <tr>
          <td><p class="font-weight-bold">Fecha Fin</p></td>
          <td><label for="fecfin"></label>
          <input type="text" name="fecfin" id="fecfin" value="<?php echo $_GET['FechaFin'] ?>"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
        </tr>
      </table>
    </form>

    <p>&nbsp;</p>
  </div>

</body>
</html>