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
    <style>
      .formTitle{font-size:35px;}
      *{padding: 0; margin: 0; box-sizing:border-box; font-family:'Courier New', Courier, monospace;}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body bgcolor="C9FFA2">
    <br><br>
    <center><p class="formTitle">Registro</p></center>
    <br><br><hr>
    <form action="contacto.php" method="POST"><br><br>
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
  <table>
        <p class="plantilla">
            <img src="imagenes/RECLIB.png" class="logoplantilla">
            <br><br>
            RECLIB <br>
            Intagram: reclib_ <br>
            Facebook: Reclib <br>
            Email: reclib.microempresa@gmail.com <br>
            <br><br><br>
        </p>
    </table>
</html>
<?php
  if(isset($_POST['enviar'])){
    $Nombre = $_POST['nombre'];
    $Email = $_POST['email'];
    $Telefono = $_POST['telefono'];
    $Asunto = $_POST['asunto'];
    $Mensaje = $_POST['mensaje'];
    $insertarDatos = "INSERT INTO formulario VALUES ('$Nombre','$Email','$Telefono','$Asunto','$Mensaje')";
    
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    if(!$ejecutarInsertar){
      echo"Error en la linea de sql";
    }
  }
?>
