<div class="subcategorias form">
<?php echo $this->Form->create('Subcategoria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subcategoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('categoria_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subcategoria.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Subcategoria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subcategorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
