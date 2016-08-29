<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from 192.69.216.111/themes/preview/ace/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 24 Sep 2013 22:15:48 GMT -->
<head>
		<link href="<?php echo $this->webroot;?>app/favicon.ico" type="image/x-icon" rel="icon">
		<link href="<?php echo $this->webroot;?>app/favicon.ico" type="image/x-icon" rel="shortcut icon">
		<meta charset="utf-8" />
		<title>Distribuidor</title>

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
													Registro
												</div>
											</h4>

											<div class="space-6"></div>

										
												<div class="um_box_mid_content_mid_left">
													<?php echo $this->Form->create('User', array('action' => 'register')); ?>

													<fieldset>
														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<?php echo $this->Form->input("username" ,array('label' => false,'div' => false,'class'=>"form-control", 'type' => 'text', 'placeholder' => 'Username' ))?>
																<i class="icon-envelope"></i>
															</span>
														</label>

														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"form-control", 'type' => 'text', 'placeholder' => 'Nombre' ))?>
																<i class="icon-envelope"></i>
															</span>
														</label>

														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"form-control", 'type' => 'text', 'placeholder' => 'Apellido' ))?>
																<i class="icon-envelope"></i>
															</span>
														</label>

														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"form-control", 'type' => 'text', 'placeholder' => 'Email' ))?>
																<i class="icon-envelope"></i>
															</span>
														</label>

														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<?php echo $this->Form->input("password" ,array('label' => false,'div' => false,'class'=>"form-control", 'type' => 'password', 'placeholder' => 'Password' ))?>
																<i class="icon-envelope"></i>
															</span>
														</label>

														<label class="block clearfix">
															<span class="block input-icon input-icon-right">
																<?php echo $this->Form->input("cpassword" ,array('label' => false,'div' => false,'class'=>"form-control", 'type' => 'password', 'placeholder' => 'Confirm Password' ))?>
																<i class="icon-envelope"></i>
															</span>
														</label>

														<div class="clearfix">
															<button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
																Enviar
															</button>
														</div>
													</fieldset>

													<?php echo $this->Form->end(); ?>
												</div>
									</div><!-- /widget-body -->
												<div class="toolbar center">
													<div class="text-right">
														<a href="<?php echo $this->webroot;?>login" class="forgot-password-link">
															Volver
														</a>
													</div>
												</div>
								</div><!-- /login-box -->
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





















<!--


<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Sign Up or'); ?></span>
				<span  class="umstyle2"><?php echo $this->Html->link(__("Sign In",true),"/login") ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="register">
				<div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('User', array('action' => 'register')); ?>
			<?php   if (count($userGroups) >2) { ?>
						<div>
							<div class="umstyle3"><?php echo __('Group');?><font color='red'>*</font></div>
							<div class="umstyle4" ><?php echo $this->Form->input("user_group_id" ,array('type' => 'select', 'label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
							<div style="clear:both"></div>
						</div>
			<?php   }   ?>
					<div>
						<div class="umstyle3"><?php echo __('Username');?><font color='red'>*</font></div>
						<div class="umstyle4" ><?php echo $this->Form->input("username" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('First Name');?><font color='red'>*</font></div>
						<div class="umstyle4" ><?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('Last Name');?><font color='red'>*</font></div>
						<div class="umstyle4" ><?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('Email');?><font color='red'>*</font></div>
						<div class="umstyle4" ><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('Password');?><font color='red'>*</font></div>
						<div class="umstyle4"><?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div>
						<div class="umstyle3"><?php echo __('Confirm Password');?><font color='red'>*</font></div>
						<div class="umstyle4"><?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
			<?php   if(USE_RECAPTCHA && PRIVATE_KEY_FROM_RECAPTCHA !="" && PUBLIC_KEY_FROM_RECAPTCHA !="") { ?>
					<div>
						<div class="umstyle4" style="margin-left:45px"><?php echo $this->UserAuth->showCaptcha(isset($this->validationErrors['User']['captcha'][0]) ? $this->validationErrors['User']['captcha'][0] : ""); ?></div>
						<div style="clear:both"></div>
					</div>
			<?php   } ?>
					<div>
						<div class="umstyle3"></div>
						<div class="umstyle4"><?php echo $this->Form->Submit(__('Sign Up'));?></div>
						<div style="clear:both"></div>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserUsername").focus();
</script>

-->