<div class="categorias view">
<h2><?php echo __('Categoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($categoria['Categoria']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria'), array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), array(), __('Are you sure you want to delete # %s?', $categoria['Categoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategorias'), array('controller' => 'subcategorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategoria'), array('controller' => 'subcategorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($categoria['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['name']; ?></td>
			<td><?php echo $producto['precio']; ?></td>
			<td><?php echo $producto['cantidad']; ?></td>
			<td><?php echo $producto['categoria_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array(), __('Are you sure you want to delete # %s?', $producto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subcategorias'); ?></h3>
	<?php if (!empty($categoria['Subcategoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoria['Subcategoria'] as $subcategoria): ?>
		<tr>
			<td><?php echo $subcategoria['id']; ?></td>
			<td><?php echo $subcategoria['name']; ?></td>
			<td><?php echo $subcategoria['categoria_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subcategorias', 'action' => 'view', $subcategoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subcategorias', 'action' => 'edit', $subcategoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subcategorias', 'action' => 'delete', $subcategoria['id']), array(), __('Are you sure you want to delete # %s?', $subcategoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subcategoria'), array('controller' => 'subcategorias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
