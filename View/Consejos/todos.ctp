<style type="text/css">
.descripcion_item {
    padding: 10px !important;
}

</style>

<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php //echo $this->element('dashboard'); ?>
	
<div class="row">
	<div class="col-xs-12">
		<div class="page-header">
			<h1>
				<legend><?php echo __('Todos los Consejos'); ?></legend>
			</h1>
		</div>
	
	
			<div class="um_box_mid_content_mid" id="index">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
					<thead>
						<tr role="row">
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 200px;">Nombre</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 200px;">Descripción</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 100px;">Creado</th>
							<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 50px;" aria-label="">Acción</th>
						</tr>
					</thead>
					<tbody>
			<?php       if (!empty($consejos)) {
							$sl=0;
							
							
							 foreach ($consejos as $row) { ?>
							
		<tr class="odd">
			<td class="td-name" data-user-name="<?php echo $row['Consejo']['nombre']?>"><?php echo $row['Consejo']['nombre']?></td>
			<td class="td-username"><?php echo $row['Consejo']['descripcion'] ?></td>
			<td class=""><?php echo date('d-M-Y',strtotime($row['Consejo']['created'])); ?></td>
			<td class=" ">
			<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
			
							
			<a class="" href="<?php echo $this->webroot.'consejos/edit/'.$row['Consejo']['id'];?>" title="Editar">
			<i class="icon-pencil bigger-130"></i>
			</a>
			<?php 
				echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Eliminar'), "title" => __('Eliminar'))), array('action' => 'delete', $row['Consejo']['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea eliminar este consejo?')));
			
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