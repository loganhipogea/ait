<?php
$servername = "localhost";
$database = "atpumps";
$username = "julian";
$password = "toxoplasma1";
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

     
  $sql = "SELECT id FROM TEMATICAS";

  $datos = mysqli_query($conexion, $sql);
  $arrayDatos = mysqli_fetch_array($datos);

  print_r ($arrayDatos);
mysqli_close($conn);
?>

