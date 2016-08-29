<div class="subcategorias view">
<h2><?php echo __('Subcategoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subcategoria['Subcategoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subcategoria['Subcategoria']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subcategoria['Categoria']['name'], array('controller' => 'categorias', 'action' => 'view', $subcategoria['Categoria']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subcategoria'), array('action' => 'edit', $subcategoria['Subcategoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subcategoria'), array('action' => 'delete', $subcategoria['Subcategoria']['id']), array(), __('Are you sure you want to delete # %s?', $subcategoria['Subcategoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
