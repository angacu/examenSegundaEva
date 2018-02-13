<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de conexion</title>
  </head>
  <body>

    <?php
    // conexion a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "juegosdb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
        }else {
          $id=$_GET["id"];
          $consulta="SELECT * FROM usuario WHERE id='".$id."'";
          echo "CONECTADO A LA BBDD <BR><BR>";

          echo "La id recibida es: ".$id."<br>";


    // consulta y metodo $_GET
    $consulta = $mysqli->query($consulta);
    foreach ($consulta as $fila) {
      echo "El id:  ".$fila['id'];
      echo "<br>";
      echo "El nombre:  ".$fila['nombre'];
      echo "<br>";
      echo "Los apellidos:  ".$fila['apellidos'];
      echo "<br>";
      echo "La edad:  ".$fila['edad'];
      echo "<br>";
      echo "El curso:  ".$fila['curso'];
      echo "<br>";
      echo "La puntuacion:  ".$fila['puntuacion'];
      echo "<br>";
      echo "El correo:  ".$fila['correo'];
    }
    }
    ?>

  </body>
</html>
