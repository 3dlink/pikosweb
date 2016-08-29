<div class="tracks view">
<h2><?php echo __('Track'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($track['Track']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($track['Track']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Track'), array('action' => 'edit', $track['Track']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Track'), array('action' => 'delete', $track['Track']['id']), array(), __('Are you sure you want to delete # %s?', $track['Track']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ventas'); ?></h3>
	<?php if (!empty($track['Venta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Carrito Id'); ?></th>
		<th><?php echo __('Track Id'); ?></th>
		<th><?php echo __('Precio Total'); ?></th>
		<th><?php echo __('Direcciom Envio'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($track['Venta'] as $venta): ?>
		<tr>
			<td><?php echo $venta['id']; ?></td>
			<td><?php echo $venta['carrito_id']; ?></td>
			<td><?php echo $venta['track_id']; ?></td>
			<td><?php echo $venta['precio_total']; ?></td>
			<td><?php echo $venta['direcciom_envio']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ventas', 'action' => 'view', $venta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ventas', 'action' => 'edit', $venta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ventas', 'action' => 'delete', $venta['id']), array(), __('Are you sure you want to delete # %s?', $venta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
