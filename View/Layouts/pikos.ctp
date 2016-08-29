<html style="height: 100%;">
<head>	
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>
		<?php echo 'Pikos' ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/genome" rel="stylesheet" type="text/css"/>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script type="text/javascript">WEBROOT='<?php echo $this->webroot;?>';</script>

	<script type="text/javascript">
var myCenter=new google.maps.LatLng(10.498369, -66.834660);
	function initialize(){
		var mapProp = {
		  center:myCenter,
		  zoom:15,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };

		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker=new google.maps.Marker({
		  position:myCenter,
		  });

		marker.setMap(map);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<?php
		echo $this->Html->meta('icon');

		//CSS
		// echo $this->Html->css('../library/bootstrap/css/bootstrap');
		// echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('pikos');
		echo $this->Html->css('font-awesome.min');

		// echo $this->Html->script('lib/bootstrap.min');
		// echo $this->Html->script('lib/jquery-2.0.3.min');
		echo $this->Html->script('pikos');
		echo $this->Html->script('scrollTo');
		echo $this->fetch('meta');
		echo $this->fetch('css');	
		//echo $this->fetch('script');
		$today = date('Y-m-d H:i:s');

	?>

</head>
<body>
	<header>	
		<div style="cursor:pointer;" onclick="window.location = '<?php echo $this->webroot; ?>'" id="logo">
			<img style="width:70%;  margin-left: 40px;" src="<?php echo $this->webroot?>img/logo.png">
		</div>
	</header>
	<nav>
		<div id="inicio">INICIO</div>
		<?php foreach ($categorias as $categoria) { ?>
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
		    <?php echo mb_strtoupper($categoria['Categoria']['name']); ?>
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="<?php echo $this->webroot.'productos/index/'.$categoria['Categoria']['id'];?>">Todo</a></li>
		    <li class="divider"></li>

				<?php foreach ($categoria['Subcategoria'] as $subcategoria) { ?>	
		    <li><a href="<?php echo $this->webroot.'productos/index/'.$categoria['Categoria']['id'].'_'.$subcategoria['id'];?>"><?php echo ucwords($subcategoria['name']); ?></a></li>
		    <?php } ?>
		  </ul>
		</div>
		<?php } ?>
		<div onclick="window.location = '<?php echo $this->webroot;?>comoComprar'">COMO COMPRAR</div>
		<div onclick="window.location = '<?php echo $this->webroot;?>consejos'">CONSEJOS</div>
		<div onclick="window.location = '<?php echo $this->webroot;?>contacto'">CONTACTO</div>
		<?php if(!$this->UserAuth->isLogged()){?>
			<div class="cuenta">MI CARRITO <?php if($this->UserAuth->isLogged()) echo '('.count($user['Productos']).')';?></div>
		<?php }else{ ?>

			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    <?php echo strtoupper($user['User']['first_name']); ?> <?php echo '('.count($user['Productos']).')';?>
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="<?php echo $this->webroot.'carrito';?>">Ver Carrito</a></li>
			    <li class="divider"></li>	
			    <li><a href="<?php echo $this->webroot.'perfil';?>">Editar Perfil</a></li>
			    <li class="divider"></li>	
			    <li><a href="<?php echo $this->webroot.'logout';?>">Cerrar Sesión</a></li>
			  </ul>
			</div>
		<?php } ?>
	</nav>
	<div class="" id="dash_content">	
		<div>
			<?php echo $this->Session->flash(); ?>				
			<?php echo $this->fetch('content'); ?>
		</div>		
		<div style="clear: both;"></div>
	</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button id="close_modal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h4>
      </div>
      <div class="modal-body">
        <form>
          <div id="caja_sesion" class="form-group">
            <input placeholder="Correo electrónico" type="text" class="form-control" id="email_sesion">
            <input placeholder="Contraseña" class="form-control" type="password" id="password">
          </div>

          <div id="caja_registro" class="form-group">
            <input placeholder="Nombre" type="text" class="form-control" id="nombre">
            <input placeholder="Apellido" class="form-control" type="text" id="apellido">
            <input placeholder="Telefono" class="form-control" type="num" id="telf">
            <select id="estado" class="form-control">
						  <option value="0">Estado</option>
							<?php foreach ($estados as $key => $value) {?>
						  <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
						  <?php } ?>
						</select>
            <input placeholder="Correo electrónico" type="text" class="form-control" id="email_registro">
            <input placeholder="Contraseña" class="form-control" type="password" id="password_registro">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="registrarse" type="button" style="margin-top: 0;" class="btn btn-default btn_pikos_general pequenho">Registrarse</button>
        <button class="btn btn-success btn-lg" type="button" id="ingresar">Iniciar Sesión</button>
        <button class="btn btn-success btn-lg" type="button" id="registro">Registrarse</button>
      </div>
    </div>
  </div>
</div>
<footer>
	<nav>
		<div id="inicio">INICIO</div>
		<?php foreach ($categorias as $categoria) { ?>
		<div onclick="window.location = '<?php echo $this->webroot;?>productos/index/<?php echo $categoria['Categoria']['id'];?>'"><?php echo mb_strtoupper($categoria['Categoria']['name']);?></div>
		<?php } ?>
		<div onclick="window.location = '<?php echo $this->webroot;?>comoComprar'">COMO COMPRAR</div>
		<div onclick="window.location = '<?php echo $this->webroot;?>consejos'">CONSEJOS</div>
		<div onclick="window.location = '<?php echo $this->webroot;?>contacto'">CONTACTO</div>
		<div class="cuenta">MI CARRITO</div>
	</nav>
</footer>

</body>
<script type="text/javascript">
	
	$('#registrarse').click(function() {
		$('#caja_registro').css({'display': 'block'});
		$('#registro').css({'display': 'block'});
		$('#registrarse').css({'display': 'none'});
		$('#caja_sesion').css({'display': 'none'});
		$('#ingresar').css({'display': 'none'});
		$('#exampleModalLabel').html('Registrarse');
	});

	
	$('#exampleModal').on('hidden.bs.modal', function () {
		$('#caja_registro').css({'display': 'none'});
		$('#registro').css({'display': 'none'});
		$('#registrarse').css({'display': 'block'});
		$('#caja_sesion').css({'display': 'block'});
		$('#ingresar').css({'display': 'block'});
		$('#exampleModalLabel').html('Iniciar Sesión');
	});


$(document).keypress(function(event) {
	if(event.which == 13){
		var titulo = $('#exampleModalLabel').html();
		if($('#exampleModal').hasClass('in')){
			if(titulo == "Iniciar Sesión"){
				$('#ingresar').click();
			}else{
				$('#registro').click();
			}
		}
	}
});


	$('#inicio').click(function(){
		window.location = "<?php echo $this->webroot;?>";
	});


	$('#registro').click(function(){

		var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		
		var email = $('#email_registro').val();
		if(($('#nombre').val() != "") && (email != "") && ($('#password_registro').val() != "")){

			if(!pattern.test(email)){
				alert('No es un correo electrónico válido');
				return false;
			}else{

				$('#registro').attr('disabled', 'disabled');
				var data_registro=new Object();
				data_registro={
					'first_name' : $('#nombre').val(),
					'last_name' : $('#apellido').val(),
					'estado_id' : $('#estado').val(),
					'phone' : $('#telf').val(),
					'email' : $('#email_registro').val(),
					'password' : $('#password_registro').val()
				};

				$.post('<?php echo $this->webroot?>start/register',{data:data_registro},function(data){
					if(data == 1){
						alert('Bienvenido!. Se ha registrado con éxito!');
		    		$('#exampleModal').modal('hide');
					}
				},'json');
			}
		}else{
			alert('Ingrese al menos nombre, correo electrónico y contraseña');
		}
	});


		$('#ingresar').click(function(){

			var data = {
				email : $('#email_sesion').val(),
				password : $('#password').val()
			}


			$.ajax({
				url:'<?php echo $this->webroot;?>login',
				type: 'post',
				data: {data:data},
				dataType: 'json',
				success: function(data){
					if(data == 0){
						alert('Datos incorrectos.');
					}
					if(data == 1){
						//window.location.replace('<?php echo $this->webroot;?>');
    		//$('#exampleModal').modal('hide');
    		location.reload();
					}
					if(data == 2){
						window.location.replace('<?php echo $this->webroot;?>dashboard');
					}
				},
				error: function(a,e,i){
					alert('Datos incorrectos.')
				}
			});
		});


	$('.cuenta').click(function() {
		var login = "<?php echo $this->UserAuth->isLogged();?>";
		if(login != 1)
			$('#exampleModal').modal('toggle');
		else
			window.location.replace('<?php echo $this->webroot;?>carrito');
	});




</script>
</html>