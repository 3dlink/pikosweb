<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	
<div class="row">
	<div class="col-xs-12">
		<div class="page-header">
			<h1>
				<legend><?php echo __('Todos los Productos'); ?></legend>
			</h1>
		</div>
	
	
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
					<thead>
						<tr role="row">
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 255px;">Nombre</th>
							<!-- <th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Precio</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 45px;">Cantidad</th> -->
							<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 245px;">Categoría</th>
							<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Subcategoría</th>
							<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 263px;" aria-label="">Acción</th>
						</tr>
					</thead>
					<tbody>
			<?php       if (!empty($productos)) {
							$sl=0;
							
							
							 foreach ($productos as $row) { ?>
							
		<tr class="odd">
			<td class="td-name" data-user-name="<?php echo $row['Producto']['name']?>"><?php echo $row['Producto']['name']?></td>
			<!-- <td class="td-username"><?php echo $row['Producto']['precio'] ?></td>
			<td class="td-username"><?php echo $row['Producto']['cantidad'] ?></td> -->
			<td class=""><?php echo $row['Categoria']['name'] ?></td>
			<td class=""><?php echo $row['Subcategoria']['name'] ?></td>
			<td class=" ">
			<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
			
							
			<a class="" href="<?php echo $this->webroot.'productos/edit/'.$row['Producto']['id'];?>" title="Editar">
			<i class="icon-pencil bigger-130"></i>
			</a>
			<?php 
				echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Eliminar'), "title" => __('Eliminar'))), array('action' => 'delete', $row['Producto']['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea eliminar este producto?')));
			
			?>			</div>
			</td>
			</tr>
			<?php } ?>
			<?php } ?>
	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>