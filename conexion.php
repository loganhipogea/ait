<?php
$servername = "localhost";
$database = "atpumps";
$username = "julian";
$password = "toxopñlasma1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

      
  $sql = "select *from almacenes";

  $datos = mysqli_query($conn, $sql);
  $arrayDatos = mysqli_fetch_array($datos);

  print_r ($arrayDatos);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$conexion = mysqli_connect($servidor, $usuario, $contrasena) or die("No se ha podido conectar con el servidor");

        //CREAMOS LA CONEXIÓN CON LA BASE DE DATOS QUE SE ALMACENARÁ EN $db
        $db = mysqli_select_db($conexion, $database) or die("No se ha podido conectar con la base de datos");

  $sql = "SELECT id FROM TEMATICAS";

  $datos = mysqli_query($conexion, $sql);
  $arrayDatos = mysqli_fetch_array($datos);

  print_r ($arrayDatos);
mysqli_close($conn);
?>

