<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Distribuidora JRD');
?>
<!DOCTYPE html>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<script type="text/javascript">
	// $(document).ready(function() {
 //       $(".chosen-select").chosen({no_results_text: "Press the '+' button to add the Tag"});	
 //   });
	
</script>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Pikos
	</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
	<?php
		echo $this->Html->meta('icon');

		//CSS
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('pikos');
		echo $this->Html->css('ace.min');
		echo $this->Html->css('ace-rtl');
		echo $this->Html->css('ace-skins');
		echo $this->Html->css('jquery.gritter');
		//echo $this->Html->css('main');
		echo $this->Html->css(array('main'));
		echo $this->Html->script('commons');
		echo $this->Html->script('lib/jquery-2.0.3.min');
		echo $this->Html->script('lib/bootstrap.min');
		echo $this->Html->script('lib/ace-extra.min');
		echo $this->Html->script('lib/typeahead-bs2.min');
		echo $this->Html->script('lib/ace-elements.min');
		echo $this->Html->script('lib/ace.min');
		echo $this->Html->script('lib/jquery.nestable.min');
		echo $this->Html->script('lib/jquery.gritter.min');
		echo $this->Html->script('lib/jquery.session');
		echo $this->Html->script('lib/bootbox.min');
		echo $this->Html->script('lib/markdown/markdown.min');
		echo $this->Html->script('lib/markdown/bootstrap-markdown.min'); 
		echo $this->Html->script('lib/bootstrap-wysiwyg.min');
		echo $this->Html->script('lib/bootstrap-tag');
		echo $this->Html->script('lib/jquery.hotkeys.min');
		echo $this->Html->script('tinymce/tinymce.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		//echo $this->fetch('script');
		$today = date('Y-m-d H:i:s');

		$liActive = '';
		// control del active 
		if (($this->params['controller'] == 'Sellers') && ($this->params['action'] == 'index')){
			$liActive = 'bandeja';
			
		}
		else if (($this->params['action'] == 'addUser')) $liActive = 'Users';
		else if (($this->params['action'] == 'allUsers')) $liActive = 'Users';
		
		
		else if (($this->params['controller'] == 'Items') && ($this->params['action'] == 'add')) $liActive = 'Items';
		else if (($this->params['controller'] == 'Items') && ($this->params['action'] == 'index')) $liActive = 'Items';
		else if (($this->params['controller'] == 'Brands') && ($this->params['action'] == 'add')) $liActive = 'Brands';
		else if (($this->params['controller'] == 'Brands') && ($this->params['action'] == 'index')) $liActive = 'Brands';
		else if (($this->params['controller'] == 'Stores') && ($this->params['action'] == 'add')) $liActive = 'Stores';
		else if (($this->params['controller'] == 'Stores') && ($this->params['action'] == 'index')) $liActive = 'Stores';
		else if (($this->params['controller'] == 'Metas') && ($this->params['action'] == 'add')) $liActive = 'metas';
		else if (($this->params['controller'] == 'Rutas') && ($this->params['action'] == 'add')) $liActive = 'rutas';
		else if (($this->params['controller'] == 'redirections') && ($this->params['action'] == 'index')) $liActive = 'perfil';
		else if (($this->params['controller'] == 'tags') && ($this->params['action'] == 'index')) $liActive = 'etiquetas';
		else if (($this->params['controller'] == 'user_group_permissions') && ($this->params['action'] == 'index')) $liActive = 'permisos';
		else if (($this->params['controller'] == 'entities')) $liActive = 'entidades';
		else if (($this->params['controller'] == 'communicationCategories') || ($this->params['controller'] == 'communicationTypes') || ($this->params['controller'] == 'formats')) $liActive = 'comunicaciones';
		else if (($this->params['controller'] == 'user_groups')) $liActive = 'roles';
		else if (($this->params['controller'] == 'groups')) $liActive = 'grupos';
		else if (($this->params['controller'] == 'users') && ($this->params['action'] == 'dashboard')) $liActive = 'dashboard';
		else if (($this->params['controller'] == 'users')) $liActive = 'usuarios';
		else if (($this->params['controller'] == 'Csv') && ($this->params['action'] == 'index')) $liActive = 'csv';
		
	?>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
</head>
<body data-controller="<?php echo $this->params['controller'];?>" data-action="<?php echo $this->params['action'];?>">
	<div class="navbar navbar-default" id="navbar" style="background: linear-gradient(to right,white, #438eb9);">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<style type="text/css">
				
				.page-header {
					border-bottom: none;
				}

				#navbar-container{
					    background-color: white;
    border-bottom: 1px solid black;
				}
			</style>

			<div class="navbar-container container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand" style="padding:0;margin-left: 40px;">
						<small>
							<img src="<?php echo $this->webroot;?>img/logo.png" alt="VIsionware" style="width:120px;">
							
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
					<li class="green" id="notification-new-communications"></li>
												
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
									<small>Bienvenido,</small>
									<?php echo $this->Session->read('UserAuth.User.first_name');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo $this->webroot.'changePassword'?>">
										<i class="icon-cog"></i>
										Cambiar contraseña
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo $this->webroot.'logout'?>">
										<i class="icon-off"></i>
										Salir
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<ul class="nav nav-list">
					
					<?php if ( ('UserAuth.User') && ($this->Session->read('UserAuth.User.user_group_id'))==1) { ?>

						<li class="<?php if($liActive == 'Users') echo 'active '?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Usuarios </span>

									<b class="arrow icon-angle-down"></b>	
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo $this->webroot;?>addUser">
										<i class="icon-double-angle-right"></i>
										Nuevo usuario
									</a>
								</li>

								<li>
									<a href="<?php echo $this->webroot;?>allUsers">
										<i class="icon-double-angle-right"></i>
										Todos los usuarios
									</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot;?>addGroup">
										<i class="icon-double-angle-right"></i>
										Nuevo grupo
									</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot;?>allGroups">
										<i class="icon-double-angle-right"></i>
										Todos los grupos
									</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot;?>myprofile?>">
										<i class="icon-double-angle-right"></i>
										Perfil
									</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot;?>editUser/<?php echo $this->UserAuth->getUserId()?>">
										<i class="icon-double-angle-right"></i>
										Editar perfil
									</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot;?>changePassword">
										<i class="icon-double-angle-right"></i>
										Cambiar contraseña
									</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot;?>permissions">
										<i class="icon-double-angle-right"></i>
										Permisos
									</a>
								</li>
							</ul>
						</li>

						<li class="<?php if($liActive == 'Users') echo 'active '?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Categorias </span>

									<b class="arrow icon-angle-down"></b>	
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo $this->webroot;?>categorias/add">
										<i class="icon-double-angle-right"></i>
										Nueva categoria
									</a>
								</li>

								<li>
									<a href="<?php echo $this->webroot;?>categorias">
										<i class="icon-double-angle-right"></i>
										Todas
									</a>
								</li>
							</ul>
						</li>

						<li class="<?php if($liActive == 'Users') echo 'active '?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Subcategorias </span>

									<b class="arrow icon-angle-down"></b>	
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo $this->webroot;?>subcategorias/add">
										<i class="icon-double-angle-right"></i>
										Nueva subcategoria
									</a>
								</li>

								<li>
									<a href="<?php echo $this->webroot;?>subcategorias">
										<i class="icon-double-angle-right"></i>
										Todas
									</a>
								</li>
							</ul>
						</li>

						<li class="<?php if($liActive == 'Users') echo 'active '?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Productos </span>

									<b class="arrow icon-angle-down"></b>	
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo $this->webroot;?>productos/add">
										<i class="icon-double-angle-right"></i>
										Nuevo producto
									</a>
								</li>

								<li>
									<a href="<?php echo $this->webroot;?>productos/todos">
										<i class="icon-double-angle-right"></i>
										Todos los productos
									</a>
								</li>
							</ul>
						</li>

						<li class="<?php if($liActive == 'Users') echo 'active '?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Consejos </span>

									<b class="arrow icon-angle-down"></b>	
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo $this->webroot;?>consejos/add">
										<i class="icon-double-angle-right"></i>
										Nuevo consejo
									</a>
								</li>

								<li>
									<a href="<?php echo $this->webroot;?>consejos/todos">
										<i class="icon-double-angle-right"></i>
										Todos los consejos
									</a>
								</li>
							</ul>
						</li>

						<li class="<?php if($liActive == 'Users') echo 'active '?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Ventas </span>

									<b class="arrow icon-angle-down"></b>	
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo $this->webroot;?>ventas">
										<i class="icon-double-angle-right"></i>
										Todas
									</a>
								</li>
							</ul>
						</li>
						<?php }else{?>                 <!-- USUARIO COMERCIO -->
						
						<li class="<?php if($liActive == 'Users') echo 'active '?>">
							<a href="#" class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Perfil </span>

									<b class="arrow icon-angle-down"></b>	
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo $this->webroot;?>myprofile?>">
										<i class="icon-double-angle-right"></i>
										Perfil
									</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot;?>editUser/<?php echo $this->UserAuth->getUserId()?>">
										<i class="icon-double-angle-right"></i>
										Editar perfil
									</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot;?>changePassword">
										<i class="icon-double-angle-right"></i>
										Cambiar contraseña
									</a>
								</li>
							</ul>
						</li>
						<?php }?>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">

					<div class="page-content" style="min-height:100%;">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<?php echo $this->Session->flash(); ?>

								<?php echo $this->fetch('content'); ?>
								<!-- PAGE CONTENT ENDS -->
							</div>
						</div>
					</div>
					<?php echo $this->element('sql_dump'); ?>
				</div>
			</div>
		</div>
	<?php 
	if ($this->Session->read('UserAuth.User.first_time')) {
		//$idUser = $this->UserAuth->User->id;
		//debug($this->Session->read('UserAuth.User.first_time'), $showHtml = null, $showFrom = true);
	?>
		<div class="modal fade" id="modalChangePassFirstTime" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h4 class="modal-title" id="myModalLabel">Establecer Contraseña</h4>
		      		</div>
		      		<div class="modal-body">
		      			<div class="form-horizontal">
		      				Es primera vez que ingresas al sistema, por favor establece tu contraseña para poder ingresar
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contraseña </label>
								<div class="col-sm-9">
									<?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"col-xs-10 col-sm-5" ))?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Confirmar contraseña </label>
								<div class="col-sm-9 umstyle4">
									<?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"col-xs-10 col-sm-5" ))?>
								</div>
							</div>
			      		</div>
		      		</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-primary" id="savePasswordFirstTime">Guardar</button>
			      	</div>
		    	</div>
		  	</div>
		</div>
		<script type="text/javascript">
			$('#modalChangePassFirstTime').modal({
				show: true,
				keyboard: false,
				backdrop: 'static'
			})




		</script>
	<?php
	}
	?>	
</body>
<?php 


	
	echo $this->Html->script(array(
		'pekeUpload'
		));

	echo $this->Html->script(array('lib/typeahead'));
	echo $this->Html->script(array('lib/tagmanager'));

?>
</html>
