<style type="text/css">

.image-placeholder{
	  background: #eee;
  text-align: center;
  font-weight: 700;
  overflow: hidden;
  margin: 0 auto;
	line-height: 250px;
	width: 250px;
	height: 250px;
}

</style>

<div class="subcategorias form">
<?php echo $this->Form->create('Subcategoria'); ?>
	<fieldset>
		<legend><?php echo __('Nueva Subcategoria'); ?></legend>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control inputs', 'label'=>'Nombre de la subcategoria'));
		echo $this->Form->input('categoria_id',array('class'=>'form-control inputs'));
	?>
	<div style="margin-top:20px;margin-bottom:20px;float: left;width: 100%;">
		<div style="float:left;width:100%;">
			<label class="name_input" style="font-size: 20px;font-weight: 600;">Agregar línea</label>
			<input id="mas_lineas" style="margin-left: 10px;" class="btn btn-sm btn-primary" type="button" value="+">
			<div class="row" style="margin-top:10px;float: left;width: 100%;">
		</div>
		<div id="lineas" class="row" style="margin-top:20px;float: left;width: 100%;">
			</div>
		</div>
	</div>
	</fieldset>
	<div class="imageHiddenContent11"></div>
	<div class="imageHiddenContent12"></div>
	<div class="imageHiddenContent13"></div>
	<div class="imageHiddenContent14"></div>
	<input class="btn btn-default btn_pikos_general pequenho" type="submit" value="Guardar">
</div>
<script type="text/javascript">
var lineas=0;
	$('#mas_lineas').click(function(event) {
		if(lineas<=3){
			$('#lineas').append(
					'<div class="col-md-4">'+
						'<input name="data[Linea]['+lineas+'][nombre]" class="form-control inputs" placeholder="Nombre de la línea '+(lineas+1)+'" style="width:315px;margin:10px auto;" type="text">'+
						'<div>'+
								'<div class="image-placeholder image-placeholder1'+(lineas+1)+' second">IMÁGEN</div>'+
								'<div><input type="file" class="loco" id="file1'+(lineas+1)+'" name="file1'+(lineas+1)+'" accept="image/*" data-img="" data-index="" /></div>'+
							'</div>'+
					'</div>'
				);
			lineas++;

			$("#file1"+lineas).pekeUpload({theme:'bootstrap', btnText:'Buscar', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>productos/upload"});
		}
	});

</script>