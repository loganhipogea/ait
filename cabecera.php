<?php
$sql="select *from ait_contenidos where zona='TOPSOCIAL' and activo='1' ";
  $contenido_iconos_social=[];
      $datos= mysqli_query($conn, $sql);
           while($fila = mysqli_fetch_array($datos)){
            $contenido_iconos_social[$fila['clave']]=$fila;
           } 

$sql="select *from ait_contenidos where zona in ('TOP','COLUMNA') and activo='1' ";
  $contenido=[];
      $datos= mysqli_query($conn, $sql);
           while($fila = mysqli_fetch_array($datos)){
            $contenido[$fila['clave']]=$fila;
           } 

?>


<?php 
 $sqlFooter="select *from ait_contenidos where zona='FOOTER' ";
  $contenidoFooter=[];
      $datosFooter= mysqli_query($conn, $sqlFooter);
           while($filaFooter = mysqli_fetch_array($datosFooter)){
            $contenidoFooter[$filaFooter['clave']]=$filaFooter;
           } 
//print_r($contenidoFooter);die();
 




?>