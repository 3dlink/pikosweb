<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from 192.69.216.111/themes/preview/ace/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 24 Sep 2013 22:15:48 GMT -->
<head>
		<link href="<?php echo $this->webroot;?>app/favicon.ico" type="image/x-icon" rel="icon">
		<link href="<?php echo $this->webroot;?>app/favicon.ico" type="image/x-icon" rel="shortcut icon">
		<meta charset="utf-8" />
		<title>Pikos</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<?php 
			//CSS
			echo $this->Html->css('bootstrap.min', $rel = null, $options = array());
			echo $this->Html->css('font-awesome.min', $rel = null, $options = array());
			echo $this->Html->css('ace.min', $rel = null, $options = array());
			echo $this->Html->css('ace-rtl.min', $rel = null, $options = array());
			echo $this->Html->css('distribuidor');
			
			echo $this->Html->css('jquery.gritter');
			echo $this->Html->css('main');

			//LIBS
			echo $this->Html->script('lib/jquery-2.0.3.min');
		?>

	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="white"><img src="<?php echo $this->webroot;?>img/logo.png" alt="VIsionware" style="width:120px;"></span>
								</h1>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger ">
												<div class="text-right">
													Inicio de Sesión
												</div>
											</h4>

											<div class="space-6"></div>

											<?php echo $this->Form->create('User', array('action' => 'login')); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<?php echo $this->Form->input("email" ,array('type'=> 'text', 'label' => false, 'class' => 'form-control', 'placeholder' => "User"))?>
															<!--
															<input type="text" class="form-control" placeholder="Username" />
														-->
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'class'=>"form-control", 'placeholder' => "Password" ))?>
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>
													<div class="clearfix">
														<label class="inline">
														</label>
														<a href="<?php echo $this->webroot;?>register" class="forgot-password-link width-35 pull-left btn btn-sm btn-primary">Registrate</a>
														<input type="submit" value="Ingresar" class="width-35 pull-right btn btn-sm btn-primary">
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<!-- <div class="toolbar clearfix">
											<div class="text-right">
												<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
													Recuperar Contraseña
												</a>
											</div>
										</div> -->
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												Restore Password
											</h4>

											<div class="space-6"></div>
											<p>
												Insert Email
											</p>

											<?php echo $this->Form->create('User', array('action' => 'forgotPassword')); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"form-control", 'type' => 'text', 'placeholder' => 'Email' ))?>
															<i class="icon-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
															Send
														</button>
													</div>
												</fieldset>
											<?php echo $this->Form->end(); ?>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
												Back
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->
								
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>
								<?php echo $this->Session->flash(); ?>

		
	</body>

<!-- Mirrored from 192.69.216.111/themes/preview/ace/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 24 Sep 2013 22:15:48 GMT -->
</html>
