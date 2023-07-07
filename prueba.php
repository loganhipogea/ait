<?php

  include_once 'conexion.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" dir="ltr">
  <?php
  
  include_once('cabecera.php');
    include_once('cabecera2.php');
  $idcontenido=$_GET['idcontenido'];  
  
  
  
  
  
    
        $sql="select *from ait_contenidos where id=".$idcontenido;
//var_dump($sql);die();
         $contenido_=[];
        $datosx= mysqli_query($conn, $sql);
 
           while($fila = mysqli_fetch_array($datosx)){
            $contenido_=$fila;
           } 
           
           
           
   /*Obteniendo las fotos de la columna */
          $sqlCol="select *from ait_columnas where contenido_id=".$idcontenido;
//var_dump($sqlCol);die();
         $contenido_Col=[];
        $datosCol= mysqli_query($conn, $sqlCol);
 
           while($filaCol= mysqli_fetch_array($datosCol)){
            $contenido_Col[]=$filaCol;
           } 
       
           
           
   
  ?>
    <body class="site com-sppagebuilder view-page no-layout no-task itemid-437 es-es ltr  sticky-header layout-fluid off-canvas-menu-init">

       
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132816455-1');
</script>

    <section id="sp-main-body">
         <div class="container">
             <div class="row">
                 
                <!-- PRIMERA COLUMNA DE CONTENIDO -->    
                <div id="sp-component" class="col-sm-9 col-md-9">
                    <div class="sp-column ">
                        <div id="system-message-container">
                        </div>
                                <article class="item item-page" itemscope itemtype="http://schema.org/Article">
                                    <meta itemprop="inLanguage" content="es-ES" />
                                        <div class="page-header">
                                            <h1> <?=$contenido_['titulo']?> </h1>
                                        </div>
                                        <div class="entry-header has-post-format">
                                            <span class="post-format">
                                                <i class="fa fa-thumb-tack"></i>
                                            </span>
					 <h2 itemprop="name">
                                            Manguera para Pulpa Mineral	
                                         </h2>
                                        </div>
                                        <div itemprop="articleBody">
                                          <!--TU CONTENIDO AQUÍ -->
                                          <?=$contenido_['cuerpo']?>
                                          <!--FIN DE TU CONTENIDO -->
                                        </div>
                                <div class="article-footer-wrap">
                                        <div class="article-footer-top">
                                        </div>
                                        <div id="sp-comments">
                             
                                        </div>
                                </div>	
                            </article>
                            </div>
    
   </div><!-- FIN DE LA PRIMERA COLUMNA  -->   
      
   <!-- SEGUNDA COLUMNA -->              
 <div id="sp-right" class="col-sm-3 col-md-3 margenizquierdo"> 
    <div class="sp-column class2">
        <div class="sp-module ">
            <div class="sp-module-content">
                
            </div>
        </div>
        <div class="sp-module ">
            <h3 class="sp-module-title">CONTACTO RAPIDO</h3>
            <div class="sp-module-content">
            <div class="custom"  >
                <section class="formulario">
                    <form action="contact.php" method="post">
                        <label for="nombre" class="text-info"  >Nombre y Apellidos:</label> 
                        <input id="nombre" name="nombre" required="" type="text" placeholder="Nombre y Apellido" />
                        <label for="telefono" class="text-info" >Teléfono:</label> 
                        <input id="telefono" name="telefono" required="" type="text" placeholder="Telefono" />
                        <label for="email" class="text-info" >Email:</label> 
                        <input id="email" name="email" required="" type="email" placeholder="ejemplo@correo.com" />
                        <label for="mensaje" class="text-info" >Mensaje:</label> 
                        <textarea id="mensaje" name="mensaje" required="" placeholder="Mensaje">
                            
                        </textarea> 
                        <button id="boton-envia-correo" class="btn btn-danger"> 
                            <i class="fa fa-send"></i>  
                             Enviar mensaje
                        </button>
                    </form>
                        
                        
                </section>
            </div>
            </div>
        </div>
        <div class="sp-module ">
            <div class="sp-module-content">

                <div class="custom"  >
	<p style="font-size: 12.16px;"><a title="Informes whatsaap" href="https://api.whatsapp.com/send?phone=51<?=$contenido['columna.watsapp']['titulo']?>&amp;text=Necesito información del producto" target="_blank" rel="noopener noreferrer">
                <img title="informes whatsaap" src="images/wats.png" alt="informes whatsaap" width="450" height="205" />
            </a>
        </p>
        <?php foreach($contenido_Col as $clave=>$filaCol){ ?>
        <p style="font-size: 12.16px;">
            <div class="marcoimagen">
                <a title="<?=$filaCol['titulo']?> " href="/productos-para-la-industria.pdf" target="_blank" rel="noopener noreferrer">
                <img src="<?=$filaCol['ruta']?>" alt="" width="450" height="631" />
                </a>
                <div style="text-align: center; color:#f24d09" ><?=$filaCol['titulo']?> </div>
            </div>
        </p>
                    
        <?php } ?>
        <p style="font-size: 12.16px;">
            <div class="marcoimagen">
                <a title="catalogo de productos " href="/productos-para-la-industria.pdf" target="_blank" rel="noopener noreferrer">
                <img src="images/PIEZA.jpg" alt="" width="450" height="631" />
                </a>
                <div style="text-align: center; color:#f24d09" >Hola amiguitos</div>
            </div>
        </p>
        
       
                </div>
            </div>
        </div>
        
     </div>
   </div>
             </div>
                    
                    
                    </div>
                </section>


       
           
   


<?PHP
  include_once('footer.php');
?>

          
            
            
            
        >

        <!-- Off Canvas Menu -->
        <div class="offcanvas-menu">
            <a href="#" class="close-offcanvas" aria-label="Close"><i class="fa fa-remove" aria-hidden="true" title="HELIX_CLOSE_MENU"></i></a>
            <div class="offcanvas-inner">
                                  <div class="sp-module "><div class="sp-module-content"><ul class="nav menu">
<li class="item-437  current active"><a href="/" > Home</a></li><li class="item-538  divider deeper parent"><a class="separator ">Productos</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-538"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-538"><li class="item-540"><a href="/productos/mangueras-industriales" > Mangueras industriales</a></li><li class="item-541"><a href="/productos/sistema-de-riego-tecnificado" > Sistema de Riego tecnificado</a></li><li class="item-539"><a href="/productos/tubo-metalico-flexible-engargolado" > TUBO METÁLICO FLEXIBLE ENGARGOLADO.</a></li><li class="item-542"><a href="/productos/mangueras-de-teflon" > Mangueras de Teflón</a></li><li class="item-543"><a href="/productos/mangueras-y-tubos-de-silicona" > Mangueras y tubos de Silicona</a></li><li class="item-544"><a href="/productos/mangueras-de-pvc" > Mangueras de PVC</a></li><li class="item-545"><a href="/productos/manguera-metalica-flexible" > Manguera Metálica flexible</a></li><li class="item-546"><a href="/productos/mangueras-hidraulicas" > Mangueras Hidráulicas</a></li><li class="item-547"><a href="/productos/fajas-industriales-en-v" > Fajas Industriales en V</a></li><li class="item-548"><a href="/productos/manguera-polietileno-para-riego" > Mangueras Polietileno para riego</a></li><li class="item-549"><a href="/productos/acoples-camlock" > Acoples Camlock</a></li><li class="item-550"><a href="/productos/conexiones-hidraulicas" > Conexiones hidráulicas </a></li><li class="item-552"><a href="/productos/juntas-de-expansion" > Juntas de Expansión</a></li><li class="item-553"><a href="/productos/juntas-antisismicas-flexible" > Juntas antisismicas flexible</a></li><li class="item-555"><a href="/productos/grapas-flexco" > Grapas Flexco</a></li><li class="item-557"><a href="/productos/conexiones-sanitarias-de-acero-inoxidable" > Conexiones sanitarias de acero inoxidable</a></li><li class="item-602"><a href="/productos/mangueras-para-transporte-de-combustibles" > Mangueras para transporte de combustibles</a></li><li class="item-607"><a href="/productos/abrazaderas-industriales" > Abrazaderas Industriales</a></li><li class="item-551"><a href="/productos/planchas-de-goma-o-caucho-natural-y-pvc" > PLANCHAS DE GOMA O CAUCHO NATURAL Y PVC</a></li><li class="item-615"><a href="/productos/mallas-raschell" > Mallas Raschell</a></li><li class="item-616"><a href="/productos/acoples-tipo-chicago" > Acoples Tipo Chicago</a></li><li class="item-617"><a href="/productos/geotextil-tejido" > GEOTEXTIL TEJIDO</a></li><li class="item-618"><a href="/productos/geomembrana-hdpe" > Geomembrana HDPE</a></li></ul></li><li class="item-559  divider deeper parent"><a class="separator ">Linea Industrial</a>
<span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-559"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-559"><li class="item-560"><a href="/linea-industrial/mangas-para-riego" > Mangas para Riego</a></li><li class="item-561"><a href="/linea-industrial/vulcanizado-de-fajas-transportadoras" > Vulcanizado de Fajas Transportadoras</a></li><li class="item-562"><a href="/linea-industrial/tuberias-hdpe" > Tuberias Hdpe</a></li><li class="item-563"><a href="/linea-industrial/tuberia-sanitaria-inoxidable" > Tuberia sanitaria inoxidable</a></li><li class="item-564"><a href="/linea-industrial/rodamientos" > RODAMIENTOS INDUSTRIALES</a></li><li class="item-565"><a href="/linea-industrial/tuberias-de-pvc" > Tuberías de pvc</a></li><li class="item-566"><a href="/linea-industrial/valvulas-industriales" > Válvulas industriales</a></li><li class="item-567"><a href="/linea-industrial/manguera-para-pulpa-mineral" > Manguera para Pulpa Mineral</a></li><li class="item-568"><a href="/linea-industrial/mangueras-para-bombeo-de-hormigon" > Mangueras para Bombeo de Hormigon</a></li><li class="item-569"><a href="/linea-industrial/bridas-industriales" > Bridas Industriales</a></li><li class="item-572"><a href="/linea-industrial/manguera-neumatica" > Manguera neumática</a></li><li class="item-573"><a href="/linea-industrial/bandas-transportadoras-para-alimentos" > Bandas transportadoras para alimentos</a></li><li class="item-574"><a href="/linea-industrial/manguera-para-alimentos-y-bebidas" > Manguera Para Alimentos y Bebidas</a></li><li class="item-575"><a href="/linea-industrial/fajas-transportadoras" > Fajas Transportadoras </a></li><li class="item-554"><a href="/linea-industrial/mangueras-contra-incendio" > Mangueras Contra Incendio</a></li><li class="item-558"><a href="/linea-industrial/mangueras-para-motobombas" > Mangueras para motobombas</a></li><li class="item-556"><a href="/linea-industrial/pegamentos-rema-tip-top" > Pegamentos Rema Tip top</a></li><li class="item-608"><a href="/linea-industrial/cables-de-seguridad-para-manguera" > cables de Seguridad Para Manguera</a></li><li class="item-609"><a href="/linea-industrial/cables-de-acero" > Cables de acero</a></li><li class="item-610"><a href="/linea-industrial/manguera-para-succion-de-asfalto" > Manguera para Succión de Asfalto</a></li><li class="item-613"><a href="/linea-industrial/elementos-de-proteccion-personal-epp" > Elementos de Protección Personal (EPP)</a></li></ul></li><li class="item-570"><a href="/contacto" > Contacto</a></li><li class="item-571">		<a href="/productos-para-la-industria.pdf" rel="noopener noreferrer" target="_blank" > Catalogo 2022</a></li><li class="item-601"><a href="/noticias" > Noticias</a></li></ul>
</div></div>
                            </div> <!-- /.offcanvas-inner -->
        </div> <!-- /.offcanvas-menu -->

        <!-- Global site tag (gtag.js) - Google Ads: 761977773 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-761977773">
</script>
       
        
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-761977773');
</script>


        
        
        <!-- Preloader -->
        

        <!-- Go to top -->
        
    </body>
</html>