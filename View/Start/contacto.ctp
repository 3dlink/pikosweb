<style type="text/css">
.page-header {
	border-bottom: none;
}
</style>
<div style="float:left; width:100%;margin-bottom:60px;">
	<div class="page-header">
		<h3>Escríbenos</h3>
	</div>
	<form id="formulario">
		<div class="inputs_footer">
			<div class="col-xs-6">
				<input type="text" class="form-control" placeholder="Nombre" id="name">
			</div>
			<div class="col-xs-6">
				<input type="email" class="form-control" placeholder="Correo" id="email">
			</div>
		</div>
		<div class="inputs_footer">
			<div class="col-xs-6">
				<input type="text" class="form-control" placeholder="Teléfono" id="tlf">
			</div>
			<div class="col-xs-6">
				<input type="text" class="form-control" placeholder="Asunto" id="asunto">
			</div>
		</div>
		<div class="col-xs-12">
			<textarea name="" class="form-control" cols="30" rows="4" id="cuestion"></textarea>
		</div>
		<div class="col-xs-12">
			<button class="btn btn-success btn-lg" type="button" id="enviar">
				Enviar
			</button>	
		</div>
		
	</form>
	<div style="clear:both;"></div>
    <div class="redes">
      <a target="_blank" href="https://www.facebook.com/pages/Pikos/169487866458456?fref=ts"><img class="img_redes" src="<?php echo $this->webroot; ?>img/facebook.png"></a>
      <a target="_blank" href="https://instagram.com/pikoslenceriacombinable/"><img class="img_redes" src="<?php echo $this->webroot; ?>img/instagram.png"></a>
    </div>
</div>


<script type="text/javascript">

$('#enviar').click(function(){

	if($('#email').val() == "" || $('#cuestion').val() == "" || $('#name').val() == "" ){
		alert('Debe ingresar al menos el nombre, email y contenido');
	}else{
		$('#enviar').html("Enviando...");
		var data = {
		  name : $('#name').val(),
		  email : $('#email').val(),
		  tlf : $('#tlf').val(),
		  asunto : $('#asunto').val(),
		  cuestion : $('#cuestion').val(),
	  };

	  $.ajax({
			url:WEBROOT+'start/sendMail',
			data : data,
			dataType: 'json',
			success: function(data){
				if(data == 1){
					alert('Gracias. Ha establecido contacto con Pikos. En breve momentos lo estaremos contactando.');
					$('#enviar').html("Enviar");
				}
			},
			error: function(a,e,i){
				console.log(i);
			}
		});
	}
});



</script>