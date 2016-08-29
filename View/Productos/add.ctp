<script type="text/javascript">
//Inicializamos el tinymce
tinymce.init({
	selector: ".texto",
	language : 'es',
    plugins: 'link image code',
    relative_urls: true
});
</script>

<style>

.texto{
	height: 400px;
	margin-top: 20px;
}

legend{
  border-bottom: none;
}
.page-header {
  border-bottom: none;
}
  .image-placeholder{
	  background: #eee;
  height: 400px;
  line-height: 362px;
  text-align: center;
  font-weight: 700;
  overflow: hidden;
  width: 800px;
  margin: 0 auto;
}

.second{
	line-height: 250px;
	width: 250px;
	height: 250px;
}

.col-sm-9{
	width: inherit;
}

.name_input{
	float: left;
}

.input_diego{
	width: 80%;
  float: right;
}

.una_linea > .name_input{
	*float: left;
}

#imagen_principal{
	  float: left;
  width: 100%;
    margin-bottom: 80px;
}
.form-actions {
	margin-top: 100px;
}

</style>

<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>

<div class="page-header">
	<h1>
		<legend><?php echo __('Nuevo Producto'); ?></legend>
	</h1>
</div>
	
	<div class="row">
		<div class="col-xs-12">

			<div>


				<div class="form-group">

				<div class="form-group">
					<label class="name_input">Nombre</label>
					<?php echo $this->Form->input("name" ,array('label' => false,'div' => false,'class'=>" input_diego" ))?>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="name_input">Descripción</label>
					<?php echo $this->Form->input("descripcion" ,array('label' => false, 'type'=>'textarea','div' => false,'class'=>"texto" ))?>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<div class="row">
		
						<div class="col-md-4">
							<label class="name_input">Categoria</label>
							<?php echo $this->Form->input("categoria_id" ,array('label' => false, 'type'=>'select', 'placeholder'=>'Categoria', 'options'=>$categorias, 'div' => false))?>
						</div>

		
						<div class="col-md-4">
							<label class="name_input">Subcategoria</label>
							<?php echo $this->Form->input("subcategoria_id" ,array('id'=>'subcat','label' => false, 'type'=>'select', 'placeholder'=>'Subcategoria', 'options'=>$subcategorias, 'div' => false))?>
						</div>


						<div class="col-md-4">
							<label class="name_input">Línea</label>
							<?php echo $this->Form->input("linea_id" ,array('id'=>'linea','label' => false, 'disabled'=>true, 'type'=>'select', 'placeholder'=>'Línea', 'div' => false))?>
						</div>
						

						<!-- <div class="col-xs-6 col-sm-3">
							<label class="name_input">Precio</label>
							<?php echo $this->Form->input("precio" ,array('label' => false,'div' => false ))?>
							<input name="data[Producto][precio]" step="any" type="number" id="ProductoPrecio">
						</div> -->

						<!-- <div class="col-md-4">
							<label class="name_input">Cantidad</label>
							<?php echo $this->Form->input("cantidad" ,array('label' => false,'div' => false ))?>
						</div> -->

					</div>

					<div id="medidas" style="margin-top:20px;margin-bottom:20px;float: left;width: 100%;">
						<div style="float:left;width:100%;">
							<label class="name_input" style="font-size: 20px;font-weight: 600;">Agregar medidas</label>
							<a id="mas_medidas" class="btn btn-sm btn-primary" style="margin-left: 40px;float: left;">+</a>
						</div>
						<div class="row" style="margin-top:20px;float: left;width: 100%;">
							<div class="col-xs-6 col-md-4">
								<label class="name_input">Medida</label>
								<input name="data[Medida][0][medida]" step="any" type="text">
							</div>
							<div class="col-xs-6 col-md-4">
								<label class="name_input">Precio</label>
								<input name="data[Medida][0][precio]" step="any" type="number">
							</div>
							<div class="col-xs-6 col-md-4">
								<label class="name_input">Cantidad</label>
								<input name="data[Medida][0][cantidad]" step="any" type="number">
							</div>
						</div>
					</div>
				</div>

				<div style="width: 12%;margin: 50px auto;">
					<label class="name_input">Destacado</label>
					<?php echo $this->Form->input("destacado" ,array('label' => false,'div' => false ))?>
				</div>

				<div> 
					<h1><legend>IMÁGENES</legend></h1>
				</div>
				<div id="imagen_principal">
					<div>
						<div class="image-placeholder image-placeholder1">IMÁGEN PRINCIPAL</div>
						<div><input type="file" class="loco" id="file1" name="file1" accept="image/*" data-img="" data-index="" /></div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<div>
							<div class="image-placeholder image-placeholder2 second">IMÁGEN</div>
							<div><input type="file" class="loco" id="file2" name="file2" accept="image/*" data-img="" data-index="" /></div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3">
						<div>
							<div class="image-placeholder image-placeholder3 second">IMÁGEN</div>
							<div><input type="file" class="loco" id="file3" name="file3" accept="image/*" data-img="" data-index="" /></div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3">
						<div>
							<div class="image-placeholder image-placeholder4 second">IMÁGEN</div>
							<div><input type="file" class="loco" id="file4" name="file4" accept="image/*" data-img="" data-index="" /></div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3">
						<div>
							<div class="image-placeholder image-placeholder5 second">IMÁGEN</div>
							<div><input type="file" class="loco" id="file5" name="file5" accept="image/*" data-img="" data-index="" /></div>
						</div>
					</div>
				</div>
<!-- 
				<figure class="span12" style="margin-top: 5%;">
					<div class="form_holder" id="image">
						<div class="col-md-3 col-sm-3">
							<label style="margin-left: 55%;">Otra imágen</label>
						</div>

						<div class="span3">
							<div class="image-placeholder image-placeholder2 second">Imágen</div>
							<div class="span9" style=" margin-left:270px; text-align: left;">
								<input type="file" class="loco" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
							</div>
						</div>
					</div>
				</figure> -->
				<div class="imageHiddenContent1"></div>
				<div class="imageHiddenContent2"></div>
				<div class="imageHiddenContent3"></div>
				<div class="imageHiddenContent4"></div>
				<div class="imageHiddenContent5"></div>


							
				<div class="clearfix form-actions">
					<div>
						<button class="btn btn-info" type="submit" id="add">
							<i class="icon-ok bigger-110"></i>
							Guardar
						</button>
					</div>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
			<div class="um_box_mid_content_mid_right" align="right"></div>
			<div style="clear:both"></div>
		</div>
	</div>

</div>


<script type="text/javascript">

var medidas=0;

	$('#mas_medidas').click(function(event) {
		medidas++;
		$('#medidas').append(
			'<div class="row" style="margin-top:20px;float: left;width: 100%;">'+
				'<div class="col-xs-6 col-md-4">'+
					'<label class="name_input">Medida</label>'+
					'<input name="data[Medida]['+medidas+'][medida]" step="any" type="text">'+
				'</div>'+
				'<div class="col-xs-6 col-md-4">'+
					'<label class="name_input">Precio</label>'+
					'<input name="data[Medida]['+medidas+'][precio]" step="any" type="number">'+
				'</div>'+
				'<div class="col-xs-6 col-md-4">'+
					'<label class="name_input">Cantidad</label>'+
					'<input name="data[Medida]['+medidas+'][cantidad]" step="any" type="number">'+
				'</div>'+
			'</div>'
			);
	});

	$('#subcat').change(function(){
    subcatId=$('#subcat').val();
    $('#linea').prop("disabled", true);
    $.get(WEBROOT+'productos/getLineas/',{subcategoria_id:subcatId},function(data){
    	$('#linea').html('');    
      if(Object.keys(data['lineas']).length!=0){
        $('#linea').prop("disabled", false);
        for(var x  in data['lineas']){
          $('#linea').append('<option value="'+x+'">'+data['lineas'][x]+'</option>');
        }
      }
    },'json');
	});

	$(document).ready(function(){

    subcatId=$('#subcat').val();

    $('#linea').prop("disabled", true);
    $.get(WEBROOT+'productos/getLineas/',{subcategoria_id:subcatId},function(data){  
    	$('#linea').html('');     
      if(Object.keys(data['lineas']).length!=0){
        $('#linea').prop("disabled", false);
        for(var x  in data['lineas']){
          $('#linea').append('<option value="'+x+'">'+data['lineas'][x]+'</option>');
        }
      }
    },'json');
 	
 		var toPend = "";
		$("#file1").pekeUpload({theme:'bootstrap', btnText:'Buscar', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>productos/upload"});
		$("#file2").pekeUpload({theme:'bootstrap', btnText:'Buscar', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>productos/upload"});
		$("#file3").pekeUpload({theme:'bootstrap', btnText:'Buscar', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>productos/upload"});
		$("#file4").pekeUpload({theme:'bootstrap', btnText:'Buscar', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>productos/upload"});
		$("#file5").pekeUpload({theme:'bootstrap', btnText:'Buscar', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>productos/upload"});

	});
</script>