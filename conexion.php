<?php
$servername = "localhost";
$database = "factu";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



/*
 * Obteniendo los menus y submensu
 */
  $sql = "select id,valor,url,parent_id, tiene_hijos from ait_menus where parent_id IS NULL OR parent_id = ''";
  $datos = mysqli_query($conn, $sql);
   $array_menus_padre = array();
   $array_menus_hijos=[];
  while($row = mysqli_fetch_array($datos)){
    $array_menus_padre[$row['id']] = $row;
         $clave=$array_menus_padre[$row['id']]['id'];
         $sql="select id,valor,url from ait_menus where parent_id =".$clave."";
         
         $datos_aux = mysqli_query($conn, $sql);
           while($fila = mysqli_fetch_array($datos_aux)){
             $array_menus_hijos[$clave][]=$fila;
           } 
    } 
    
  //print_r($array_menus_hijos);die();  
 
    


?>

