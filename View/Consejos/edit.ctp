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
	margin-top: 523px;
}

</style>

<div class="productos form">
<?php echo $this->Form->create('Consejo');
			echo $this->Form->input('id'); ?>

<div class="page-header">
	<h1>
		<legend><?php echo __('Editar Consejo'); ?></legend>
	</h1>
</div>
	
	<div class="row">
		<div class="col-xs-12">

			<div>


				<div class="form-group">

				<div class="form-group">
					<label class="name_input">Nombre</label>
					<?php echo $this->Form->input('nombre', array('label' => false,'div' => false,'class'=>" input_diego"));?>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="name_input">Descripción</label>
					<?php echo $this->Form->input("descripcion" ,array('label' => false, "maxlength"=>175, 'type'=>'textarea','div' => false,'class'=>" input_diego"))?>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="name_input">Contenido</label>
					<?php echo $this->Form->input("contenido" ,array('label' => false, 'type'=>'textarea','div' => false,'class'=>"texto" ))?>
					<div style="clear:both"></div>
				</div>
				<div> 
					<h1><legend>IMÁGEN</legend></h1>
				</div>
				<div id="imagen_principal">
					<div>
						<?php if($this->data['Consejo']['imagen']){?>
							<div class="image-placeholder image-placeholder1" style="background-image:url('<?php echo $this->webroot."files/".$this->data['Consejo']['imagen'];?>'); background-size:cover;  background-position-y: 50%;">
							</div>
						<?php	}else{?>
							<div class="image-placeholder image-placeholder9">IMÁGEN</div>
						<?php	}?>
						<div><input type="file" class="loco" id="file9" name="file9" accept="image/*" data-img="" data-index="" /></div>
					</div>
				</div>

				<div class="imageHiddenContent9">
					<?php if($this->data['Consejo']['imagen']){?>
						<input type="hidden" value="<?php echo $this->data['Consejo']['imagen']; ?>" id="ProductoImg1" name="data[Consejo][imagen]">
					<?php	}?>
				</div>

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

	$(document).ready(function(){
 	
 		var toPend = "";
		$("#file9").pekeUpload({theme:'bootstrap', btnText:'Buscar', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>consejos/upload"});
	});
</script>