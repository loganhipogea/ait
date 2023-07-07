<?php
  include_once 'conexion.php';
?>
<?php  
  include_once('cabecera.php');
    include_once('cabecera2.php');
    
    $sql="select *from ait_noticias where activo='1'  order by fecha desc";
  $contenidoNoticias=[];
      $datosNoticias= mysqli_query($conn, $sql);
           while($filaNoticia = mysqli_fetch_array($datosNoticias)){
            $contenidoNoticias[]=$filaNoticia;
           } 

?>
   
   <div class="body-wrapper">
      <div class="body-innerwrapper">
         <section id="sp-main-body">
            <div class="container">
                <div class="row">
                            <div id="sp-component" class="col-sm-12 col-md-12">
                                <div class="sp-column "> 
                                        <h3>Noticias</h3>
                                   <table>
                                                                <thead>
                                                                    <tr>
                                                                    <th>Titulo</th>
                                                                    <th>Contenido</th>
                                                                    <th>Fecha</th>
                                                                    </tr>
                                                                </thead>
                                                         <?php 
                                                           $i=1;
                                                         foreach($contenidoNoticias as $clave=>$fila){
                                                             ?>
                                                            
                                                            
                                                            <tr>
                                                                <td><?=$fila['titulo']?></td>
                                                                <td><?=substr($fila['contenido'],0,20)?></td>
                                                                <td><?=$fila['fecha']?></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <button onclick="myFunction('<?=$i?>');" id='ocultar-mostrar'><i class="fas fa-bars"></i></button>
                                                                    <div id="show-noticia-<?=$i?>"><?=$fila['contenido']?></div>
                                                                </td>
                                                            </tr>

                                                         <?php 
                                                         $i++;
                                                         }  ?>
                                  </table>  
                                        
                                </div>
                            </div>
                                
               </div>                            
             </div>
          </section>
                
                    </div> <!-- /.body-innerwrapper -->
        </div> <!-- /.body-innerwrapper -->

<script>
    function myFunction(valor) {
       
    var x = document.getElementById("show-noticia-"+valor);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
   }
    
</script>
<?php
include_once('footer.php');
?>


