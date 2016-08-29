<div class="tracks form">
<?php echo $this->Form->create('Track'); ?>
	<fieldset>
		<legend><?php echo __('Edit Track'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Track.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Track.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
