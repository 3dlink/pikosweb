<div class="categorias index">
	<h2><?php echo __('Categorias'); ?></h2>
		<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
					<thead>
						<tr role="row">
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 255px;">Nombre</th>
							<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 60px;" aria-label="">Acción</th>
						</tr>
					</thead>
					<tbody>
			<?php       if (!empty($categorias)) {
							$sl=0;
							
							
						foreach ($categorias as $categoria){ ?>
							
		<tr class="odd">
			<td class="td-name" data-user-name="<?php echo $categoria['Categoria']['name']?>"><?php echo $categoria['Categoria']['name']?></td>
			<td class=" ">
			<div class="action-buttons">
			<?php 
				echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'delete', $categoria['Categoria']['id']), array('escape' => false, 'confirm' => __('Seguro que desea borrar la Categoria '.$categoria['Categoria']['name'])));
			
			?>
			</div>
			</td>
			</tr>
			<?php } ?>
			<?php } ?>
	
					</tbody>
				</table>
			</div>
</div>