<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario HTML</title>
  </head>
  <body>
    <h1>Validar formularios en PHP</h1>

    <?php
      if (isset($_GET['error'])){
        $error=$_GET['error'];
          if($error=='faltan_valores')
          echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong><br/>';
          if($error=='nombre')
          echo '<strong style="color:red">Introduce nombre válido</strong><br/>';
          if($error=='apellidos')
          echo '<strong style="color:red">Los apellidos no son correctos</strong><br/>';
          if($error=='edad')
          echo '<strong style="color:red">Introduce una edad correcta</strong><br/>';
          if($error=='email')
          echo '<strong style="color:red">Introduce un email válido</strong><br/>';
        }

     ?>
    <form class="" action="guardar.php" method="POST">
      <label for="nombre">Nombre</</label><br>
      <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/>

      <label for="apellidos">Apellidos</</label><br>
      <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br/>

      <label for="edad">Edad</</label><br>
      <input type="number" name="edad" required="required" max="99"><br/>

      <label for="email">Email</</label><br>
      <input type="email" name="email" required="required"><br/>

      <label for="pass">Contraseña</</label><br>
      <input type="password" name="pass" required="required" minlength="5"><br/>

      <input type="submit" name="enviar" value="Enviar"><br/>

    </form>
  </body>
</html>
