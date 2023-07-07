<?php
  include_once 'conexion.php';
?>
<?php  
  include_once('cabecera.php');
    include_once('cabecera2.php');
 ?>   
   <div class="body-wrapper">
      <div class="body-innerwrapper">
         <section id="sp-main-body">
            <div class="container">
                <div class="row">
                    <div id="sp-component" class="col-sm-9 col-md-9">
                         <div class="sp-column "> 
                                <div class="contact" itemscope itemtype="https://schema.org/Person">                                                            
                                        <h3>Contacto</h3>
                                            <dl class="contact-address dl-horizontal" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                                <div class="row">
                                                <div class="col-sm-3 col-md-3">
                                                    <span class="jicons-icons">
                                                        <img src="images/con_address.png" alt="Dirección.: " />			
                                                    </span>
                                               </div>
					  <div class="col-sm-9 col-md-9">
                                            <span class="contact-street" itemprop="streetAddress">
                                                <?=$contenidoFooter['footer.direcciones']['cuerpo']?>
                                            </span>
                                        </div>
		                      </div>
									
                                        <div class="row">
                                                <div class="col-sm-3 col-md-3">
	
		<span class="jicons-icons">
			<img src="images/con_tel.png" alt="Teléfono: " />		</span>
                                     </div>
	<div class="col-sm-9 col-md-9">
		<span class="contact-telephone" itemprop="telephone">
			<?=$contenido['top.telfijos']['titulo']?>||<?=$contenido['top.celulares']['titulo']?> 	
                </span>
	</div>
            </div>                                    
                                                
	<div class="row">
            <div class="col-sm-3 col-md-3">
		<span class="jicons-icons">
			<img src="images/con_mobile.png" alt="Móvil: " />		</span>
            </div>
            <div class="col-sm-9 col-md-9">
		<span class="contact-mobile" itemprop="telephone">
			<?=$contenido['top.celulares']['cuerpo']?> 			</span>
	
		<span class="jicons-icons">
		</span>
           </div>
	</dt>
	<dd>
		<span class="contact-webpage">
			<a href="<?=$contenido['rutaweb']['titulo']?> " target="_blank" rel="noopener noreferrer" itemprop="url">
			<?=$contenido['rutaweb']['titulo']?> </a>
		</span>
	</dd>
</dl>

		
			
						<h3>Formulario de contacto</h3>		
		<div class="contact-form">
	<form id="contact-form" action="contact.php" method="post" class="form-validate form-horizontal well">
															<fieldset>
											<legend>Enviar un correo electrónico</legend>
																<div class="control-group field-spacer">
			<div class="control-label">
			<span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> Campo requerido</label></span><span class="after"></span></span>					</div>
		<div class="controls"> </div>
</div>
											<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_name-lbl" for="jform_contact_name" class="hasPopover required" title="Nombre" data-content="Su nombre">
	Nombre<span class="star">&#160;*</span></label>
					</div>
		<div class="controls"><input type="text" name="nombre" id="jform_contact_name"  value="" class="required" size="30"       required aria-required="true"      />
</div>
</div>
											<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_email-lbl" for="jform_contact_email" class="hasPopover required" title="Correo electrónico" data-content="Correo electrónico de contacto">
	Correo electrónico<span class="star">&#160;*</span></label>
					</div>
		<div class="controls"><input type="email" name="email" class="validate-email required" id="jform_contact_email" value=""
 size="30"    autocomplete="email"    required aria-required="true"  /></div>
</div>
											<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" class="hasPopover required" title="Asunto" data-content="Introduzca aquí el asunto de su mensaje.">
	Asunto<span class="star">&#160;*</span></label>
					</div>
		<div class="controls"><input type="text" name="jform[contact_subject]" id="jform_contact_emailmsg"  value="" class="required" size="60"       required aria-required="true"      />
</div>
</div>
											<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_message-lbl" for="jform_contact_message" class="hasPopover required" title="Mensaje" data-content="Introduzca aquí su mensaje.">
	Mensaje<span class="star">&#160;*</span></label>
					</div>
		<div class="controls"><textarea name="mensaje" id="jform_contact_message"  cols="50"  rows="10" class="required"      required aria-required="true"     ></textarea></div>
</div>
											<div class="control-group">
			<div class="control-label">
			<label id="jform_contact_email_copy-lbl" for="jform_contact_email_copy" class="hasPopover" title="Envíeme una copia" data-content="Se enviará una copia del mensaje a la dirección de correo electrónico que haya proporcionado.">
	Envíeme una copia</label>
							<span class="optional">(opcional)</span>
					</div>
		<div class="controls"><input type="checkbox" name="jform[contact_email_copy]" id="jform_contact_email_copy" value="1" /></div>
</div>
									</fieldset>
														<div class="control-group">
			<div class="controls">
				<button class="btn btn-primary validate" type="submit">Enviar</button>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="" />
				<input type="hidden" name="id" value="9:formulario-de-contactenos" />
				<input type="hidden" name="7bae96aebbe98f2363cb3aa850f6b45a" value="1" />			</div>
		</div>
	</form>
</div>

			
	
	
	
	
	
	
                    </div>
                </div>
             </div>
    <div id="sp-right" class="col-sm-3 col-md-3">
    <div class="sp-column class2">
        
        
        <div class="sp-module ">
            <div class="sp-module-content">


            </div>
    
        </div>
    </div>
            
   </div>
    
                        </div>
                            
                    </div>
                </section>
                
                    </div> <!-- /.body-innerwrapper -->
        </div> <!-- /.body-innerwrapper -->

     
<?php
include_once('footer.php');
?>


