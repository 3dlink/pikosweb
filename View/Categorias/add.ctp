<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Nueva categoria'); ?></legend>
	<?php
		echo $this->Form->input('name',array('class'=>'form-control inputs', 'label'=>'Nombre de la categoria'));
	?>
	</fieldset>
	<input class="btn btn-default btn_pikos_general pequenho" type="submit" value="Guardar">
</div>

