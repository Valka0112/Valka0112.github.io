<?php
  $servidor = "localhost";
  $usuario = "root";
  $clave = "";
  $bd = "contacto";
  $enlace = mysqli_connect ($servidor, $usuario, $clave, $bd);
?>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <br><br>
    <center><p class="formTitle">Registro</p></center>
    <br><br><hr>
    <form action="contacto.php" method="POST">
      <center><table cellspacing="30px">
        <tr>
          <td><label>Nombre Completo</label></td>
          <td><input type="text" name="nombre" placeholder="Nombre"></td>
        </tr>
        <tr>
          <td><label>Email</label></td>
          <td><input type="text" name="email" placeholder="Email"></td>
        </tr>
        <tr>
          <td><label>Telefono</label></td>
          <td><input type="number" name="telefono" placeholder="Telefono"></td>
        </tr>
        <tr>
          <td><label>Asunto</label></td>
          <td><input type="text" name="asunto" placeholder="Asunto"></td>
        </tr>
        <tr>
          <td><label>Mensaje</label></td>
          <td><input type="text" name="mensaje" placeholder="Mensaje"></td>
          </tr>
        <tr></tr><tr></tr>
        <tr>
          <td><label><center><input type="submit" name="enviar" placeholder="Enviar"></center></label></td>
          <td><label><center><input type="reset" value="Restablecer"></center></label></td>
        </tr>
          </center>
      </table>
    </form>
  </body>
</html>
<?php
  if(isset($_POST['enviar'])){
    $Nombre = $_POST['nombre'];
    $Email = $_POST['email'];
    $Telefono = $_POST['telefono'];
    $Asunto = $_POST['asunto'];
    $Mensaje = $_POST['mensaje'];
    $insertarDatos = "INSERT INTO contacto VALUES ('$Nombre','$Email','$Telefono','$Asunto','$Mensaje')";
    
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    if(!$ejecutarInsertar){
      echo"Error en la linea de sql";
    }
  }
?>
