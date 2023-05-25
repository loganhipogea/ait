<?php
$servername = "localhost";
$database = "atpumps";
$username = "julian";
$password = "toxoplasma1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

      
  


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

  $sql = "select *from almacenes";

  $datos = mysqli_query($conn, $sql);
   $arrayDatos = array();

  while($row = mysqli_fetch_array($datos)){
    $arrayDatos[] = $row;
  }
  print_r ($arrayDatos);



mysqli_close($conn);
?>

