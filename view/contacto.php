<?php include("nav.php")
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>Formulario contacto </title>
	<!-- set your website meta description and keywords -->
	<meta name="description" content="Add your business website description here">
	<meta name="keywords" content="Add your business website keywords here">
	<!-- set your website favicon -->
	<link href="contacto" rel="icon">	

	<script src="https://use.fontawesome.com/dd2428df8c.js"></script>
	
	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="../css/contact-form.css" type="text/css">	
	
</head>

<body>
<section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">
								
								<div class="col-sm-12">
									<div class="item-content colBottomMargin">
										<div class="item-info">
											<h2 class="item-title text-center">Mapa Facultad de Ciencias y Tecnologia</h2>
											
										</div><!--End item-info -->
										
								   </div><!--End item-content -->
								</div><!--End col -->
								<div class="col-md-12">	
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.473640776028!2d-66.1458257127667!3d-17.393422621798333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e373fef33857cf%3A0x676cd0a74a6599f2!2sFacultad%20de%20Ciencias%20y%20Tecnolog%C3%ADa!5e0!3m2!1ses-419!2sbo!4v1626705327503!5m2!1ses-419!2sbo" width="1075" height="450" style="border:0;" allowfullscreen="" loading="lazy" align="center"></iframe>

								
											</div>
							</div><!--End row -->
							
						
								
							
							<!-- Popup end -->
							
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->
		</div><!--End container -->
	</section>
	
	

	<section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">
								
								<div class="col-sm-12">
									<div class="item-content colBottomMargin">
										<div class="item-info">
											<h2 class="item-title text-center">Formulario de contacto FCyT</h2>
											
										</div><!--End item-info -->
										
								   </div><!--End item-content -->
								</div><!--End col -->
								<div class="col-md-12">

								
								
									<form id="contactForm" name="contactform" data-toggle="validator" class="popup-form">
												<div class="row">
													<div id="msgContactSubmit" class="hidden"></div>
													
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="fname" id="fname" placeholder="Tu nombre*" class="form-control" type="text" required data-error="Por favor ingresa tu nombre"> 
														<div class="input-group-icon"><i class="fa fa-user"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Por favor ingresa un correo electrónico válido">
														<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="phone" id="phone" placeholder="Teléfono*" class="form-control" type="text" required data-error="Por favor ingresa tu número de teléfono">
														<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="subject" id="subject" placeholder="Asunto*" class="form-control" type="text" required data-error="Por favor ingresa el asunto">
														<div class="input-group-icon"><i class="fa fa-book"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-12">
														<div class="help-block with-errors"></div>
														<textarea rows="3" name="message" id="message" placeholder="Escribe tu comentario aquí*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
														<div class="textarea input-group-icon"><i class="fa fa-pencil"></i></div>
													</div><!-- end form-group -->
													
													<div class="form-group last col-sm-12">
														<button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope'></i> Enviar</button>
													</div><!-- end form-group -->	
											
													<span class="sub-text">* Campos obligatorios</span>
													<div class="clearfix"></div>
												</div><!-- end row -->
										</form><!-- end form -->
											
											
									
									
								  
								
								</div>
							</div><!--End row -->
							
						
								
							
							<!-- Popup end -->
							
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->
		</div><!--End container -->
	</section>
	
	
	
	
	
	
	
	
	
	

	
	<div class="colBottomMargin">
		&nbsp;<div class="colBottomMargin">&nbsp;</div>
	</div>	
	
	
		
	<!-- jQuery Library -->
	<script src="../js/jquery-3.2.1.min.js"></script>	
	
	<!-- <script src="js/popper.min.js"></script>

	<script src="js/bootstrap.min.js"></script> -->
	<!-- Form Validator -->
	<script src="../js/validator.min.js"></script>
	<!-- Contact Form Js -->
	<script src="../js/contact-form.js"></script>
	
	<script src="../librerias/popper/popper.min.js"></script>
	
<script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../librerias/datatables/datatables.min.js"></script>    
<script type="text/javascript" src="../js/defesaTesis.js"></script>  
	
</body>
</html>