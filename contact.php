<?php 


include('conexion.php');
include('cabecera.php');
$ruta=$contenido['ruta']['titulo'];
$rutaweb=$contenido['rutaweb']['titulo'];
$cadena='?nombre='.urlencode($_POST['nombre']);
$cadena='?nombre='.urlencode($_POST['asunto']);
//$cadena.='&telefono='.urlencode($_POST['telefono']);
$cadena.='&email='.urlencode($_POST['email']);
$cadena.='&mensaje='.urlencode($_POST['mensaje']);
//var_dump($ruta.'site/correolibre'.$cadena); die();
 $ch = curl_init(); 

   curl_setopt($ch, CURLOPT_URL,$ruta.'site/correolibre'.$cadena); 
   curl_setopt($ch, CURLOPT_HEADER, 0); 
   //curl_setopt($ch, CURLOPT_POST, TRUE);
   curl_setopt($ch, CURLOPT_HEADER, 0); 
   //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
   //curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
   //curl_setopt($ch, CURLOPT_HEADER, 0);  
   $data = curl_exec($ch); 
   var_dump($data); die();
   curl_close($ch); 
  header('Location:'.$rutaweb);
?>