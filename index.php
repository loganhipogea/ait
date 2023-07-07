<?php
/*
 * VALORES PARA GUARDAR LOS DATOS DINAMICOS
 */
  $valores=[
      'empresa'=>'A&T PUMPS TECHNOLOGY PERU',
      'correo_ventas'=>'ventas@atpumps.com',
      'correo_servicios'=>'servicios@atpumps.com',         
      'direccion_fiscal'=>'Cal. Loma de los Suspiros Nro. 306 Int. 204',
       'direccion_zona'=>'Cal. Loma de los Suspiros Nro. 306 Int. 204',
       'direccion_distrito'=>'Cal. Loma de los Suspiros Nro. 306 Int. 204', 
       'telefono_fijo1'=>'(511)-3265247',
       'telefono_fijo2'=>'(511)-3926963',
       'celular_1'=>'965342956',
       'celular_2'=>'965342950',
       'celular_3'=>'965342953',
      
  ];
  include_once 'conexion.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" dir="ltr">
  <?php
  
  include_once('cabecera.php');
   include_once('cabecera2.php');
  $sql="select *from ait_contenidos where zona='CUERPO' ";
  $contenido=[];
      $datos= mysqli_query($conn, $sql);
           while($fila = mysqli_fetch_array($datos)){
            $contenido[$fila['clave']]=$fila;
           } 
 
  $sql="select *from ait_contenidos where id=19 ";
  $fila_slider=[];
      $datosSlider= mysqli_query($conn, $sql);
           while($fila = mysqli_fetch_array($datosSlider)){
            $fila_slider[]=$fila;
           }     
          
    $array_files_slider=json_decode($fila_slider[0]['adjuntos']);
   //var_dump(json_decode($array_files_slider));die();
     
  ?>

    <body class="site com-sppagebuilder view-page no-layout no-task itemid-437 es-es ltr  sticky-header layout-fluid off-canvas-menu-init">

        <div class="body-wrapper">
            <div class="body-innerwrapper">
                
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132816455-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132816455-1');
</script>

<section id="sp-page-title"><div class="row"><div id="sp-title" class="col-sm-12 col-md-12"><div class="sp-column "></div></div></div>
</section>
<section id="sp-main-body"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
	</div>

<div id="sp-page-builder" class="sp-page-builder  page-9">

	
	<div class="page-content">
            <section id="section-id-1545534556622" class="sppb-section "  >
                <div class="sppb-row-container">
                    <div class="sppb-row">
                        <div class="sppb-col-md-12">
                            <div id="column-id-1545534556621" class="sppb-column" >
                                <div class="sppb-column-addons">
                                    <div id="sppb-addon-1545535182690" class="clearfix" >
                                        <div id="sppb-carousel-1545535182690" data-interval="6000" class="sppb-carousel sppb-slide" data-sppb-ride="sppb-carousel">
                                                    <ol class="sppb-carousel-indicators">
                                                        <li data-sppb-target="#sppb-carousel-1545535182690"  class="active"  data-sppb-slide-to="0"></li>
                                                        <li data-sppb-target="#sppb-carousel-1545535182690"   data-sppb-slide-to="1"></li>
                                                        <li data-sppb-target="#sppb-carousel-1545535182690"   data-sppb-slide-to="2"></li>
                                                        <li data-sppb-target="#sppb-carousel-1545535182690"   data-sppb-slide-to="3"></li>
                                                        
                                                    </ol>
                                                   <div class="sppb-carousel-inner sppb-text-center">
                                                        <?php foreach($array_files_slider as $key => $ruta){   ?>
                                                        <div class="sppb-item sppb-item-15455351826901  sppb-item-has-bg">
                                                            <img src="<?=$ruta?>" alt="">
                                                                <div class="sppb-carousel-item-inner">
                                                                    <div class="sppb-carousel-caption">
                                                                        <div class="sppb-carousel-text">
                                                                            
                                                                        </div>                                                                            
                                                                    </div>                                                                        
                                                                </div>                                                                    
                                                        </div>
                                                        <?php } ?>
                                                        
                                                                                                                   
                                                    </div>
                                            <a href="#sppb-carousel-1545535182690" class="sppb-carousel-arrow left sppb-carousel-control" data-slide="prev">
                                                <i class="fa fa-chevron-left">
                                                    
                                                </i>
                                            </a>
                                            <a href="#sppb-carousel-1545535182690" class="sppb-carousel-arrow right sppb-carousel-control" data-slide="next">
                                                <i class="fa fa-chevron-right">
                                                    
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-id-1545535578972" class="sppb-section "  >
                <div class="sppb-row-container">
                    <div class="sppb-row">
                        <div class="sppb-col-md-9">
                            <div id="column-id-1545535578969" class="sppb-column" >
                                <div class="sppb-column-addons">
                                    <div id="sppb-addon-1545538159994" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-module ">
                                            <div class="sppb-addon-content">

<div class="custom"  >
	<h1 style="text-align: center;"><?=$contenido['contenido_central.nombreempresa']['titulo']?><br /><br /></h1>
        <p>
            <div style="text-align: justify;">
                <?=$contenido['contenido_central.quienessoomos']['cuerpo']?>
                
            </div>
        </p>


<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
       <h3 style="text-align:left;">Visión</h3> 
       <DIV style="text-align:justify;font-size:0.9em !important;">
           Ser proveedores de servicios especializados de electrobombas de la más alta calidad brindando una atención personalizada con profesionales altamente calificados y comprometidos en la satisfacción de nuestros clientes.
       </DIV>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <h3 style="text-align:left;">Misión</h3> 
        <DIV style="text-align:justify;font-size:0.9em !important;">
           Llegar a ser una empresa de prestigio y curriculum empresarial intachable considerada dentro de las 5 mejores del país en el suministro de servicios especializados y soporte técnico de sistemas de bombeo y electrobombas.

       </DIV>
    </div>
</div>

<div style="font-family: Arial, sans-serif; background-color: #fff; color: #fff; font-size: 12px; margin-bottom: 10px;">
    <b>&nbsp;índice general</b>
</div>

</div>
</div>
                                        </div>
                                    </div>
                                    <div id="sppb-addon-1545541179674" class="clearfix" >
                                        <div class="sppb-empty-space  clearfix"></div></div>
                                </div>
                            </div>
                       </div>
                   <div class="sppb-col-md-3">
                    <div id="column-id-1549820502282" class="sppb-column" >
                        <div class="sppb-column-addons">
                            <div id="sppb-addon-1545541159651" class="clearfix" >
                                <div class="sppb-empty-space  clearfix">
                                    
                                </div>                                    
                            </div>
                            <div id="sppb-addon-1549820502285" class="clearfix" >
                                <div class="sppb-addon sppb-addon-module ">
                                    <div class="sppb-addon-content">
                                        <div class="search">
                                                <form action="/" method="post">
                                                    <input name="searchword" id="mod-search-searchword" maxlength="200"  class="inputbox search-query" type="text" size="20" placeholder="Buscar..." />		<input type="hidden" name="task" value="search" />
                                                    <input type="hidden" name="option" value="com_search" />
                                                    <input type="hidden" name="Itemid" value="437" />
                                                </form>
                                            </div>
                                     </div>
                                 </div>
                            </div>
                            <div id="sppb-addon-1545538620049" class="clearfix" >
                                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                    <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                            <a target="_blank" href="http://www.acor">
                                                <img class="sppb-img-responsive" src="images/lado1.png" alt="Image" title="">
                                            </a>
                                            <div style="font-size:0.8em;width:100%;text-align: center; position: absolute; top:75%; color:white;  ">
                                                   Recovery components
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="sppb-addon-1545538772701" class="clearfix" >
                                    <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                        <div class="sppb-addon-content">
                                            <div class="sppb-addon-single-image-container">
                                                <a  href="/productos/correas-industriales">
                                                    <img class="sppb-img-responsive" src="images/lado3.png" alt="Image" title="">
                                                </a>
                                                <div style="font-size:0.8em;width:100%;text-align: center; position: absolute; top:75%; color:white;  ">
                                                   Mantenimiento de bombas Flygt BS
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div id="sppb-addon-1545538944615" class="clearfix" >
                                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                    <div class="sppb-addon-content">
                                        <div class="sppb-addon-single-image-container">
                                            <a  href="/linea-industrial/manguera-de-soldadura">
                                                <img class="sppb-img-responsive" src="images/lado4.png" alt="Image" title="">
                                            </a>
                                            <div style="font-size:0.8em;width:100%;text-align: center; position: absolute; top:75%; color:white;  ">
                                                   Reparación general de bombas
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                     </div>
                 </div>
              </div>                    
            </div>
        </div>
      </section>
        </div>
</div>
</div></div></div>
</section>

<?PHP
  include_once('footer.php');
?>

          
            
            
            </div> <!-- /.body-innerwrapper -->
        </div> <!-- /.body-innerwrapper -->

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
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-761977773"></script>
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