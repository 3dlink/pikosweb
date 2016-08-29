<style type="text/css">
.filtro{
	margin-bottom: 30px;
	float: left;
}
p{
	font-size: 16px;
}
</style>


<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	
<div class="row">
	<div class="">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
				<li id="li_trans" class="active">
					<a data-toggle="tab" href="#transferencias" aria-expanded="true">Transferencias/Depósitos</a>
				</li>

				<li id="li_mp" class="">
					<a data-toggle="tab" href="#mercadopago" aria-expanded="false">Mercadopago</a>
				</li>
			</ul>

			<div class="tab-content">
				<div id="transferencias" class="tab-pane active">

					<div class="filtro">
						<p>Filtrar por:</p>

							<button id="todos" onclick="window.location.href=WEBROOT+'ventas'" class="btn">Todos</button>
							<button id="proceso" onclick="window.location.href=WEBROOT+'ventas/filterProceso/0'" class="btn btn-warning">En proceso</button>	
							<button id="aprobado" onclick="window.location.href=WEBROOT+'ventas/filterAprobado/0'" class="btn btn-success">Aprobado</button>
							<button id="enviado" onclick="window.location.href=WEBROOT+'ventas/filterEnviado/0'" class="btn btn-primary">Enviado</button>
							<button id="rechazado" onclick="window.location.href=WEBROOT+'ventas/filterRechazado/0'" class="btn btn-danger">Rechazado</button>
					</div>

					<div class="um_box_mid_content_mid" id="index">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
							<thead>
								<tr role="row">
									<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 60px;">Id Cliente</th>
									<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 240px;">Nombre Cliente</th>
									<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 60px;">Id Artículo</th>
									<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 470px;">Nombre Artículo</th>
									<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 70px;">Cantidad</th>
									<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Total</th>
									<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Fecha</th>
									<th style="width: 80px;">Estado</th>
									<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 90px;" aria-label="">Acción</th>
								</tr>
							</thead>
							<tbody>
					<?php       if (!empty($ventas_tyd)) {
									$sl=0;
									
									
									 foreach ($ventas_tyd as $row) { ?>
									
									<tr class="odd">
										<td class=""><?php echo $row['user_id']?></td>
										<td class=""><?php echo $row['nombre_user'] ?></td>
										<td class=""><?php echo $row['producto_id'] ?></td>
										<td class=""><?php echo $row['nombre_producto'] ?></td>
										<td class=""><?php echo $row['cantidad'] ?></td>
										<td class=""><?php echo $row['total'] ?></td>
										<td class=""><?php echo split(" ", $row['created'])[0] ?></td>
										<td class="hidden-480">
											<?php if($row['estado'] == 1){ ?>
												<span class="label label-sm label-warning">En proceso</span>
											<?php } ?>
											<?php if($row['estado'] == 2){ ?>
												<span class="label label-success arrowed">Aprobado</span>
											<?php } ?>
											<?php if($row['estado'] == 3){ ?>
											<span class="label label-info arrowed-right arrowed-in">Enviado</span>
											<?php } ?>
											<?php if($row['estado'] == 4){ ?>
												<span class="label label-danger arrowed-in">Rechazado</span>
											<?php } ?>
										</td> 
										<td class=" ">
										<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
										<?php 

											if($row['estado'] == '1'){ //En proceso  

												echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/approve.png', array("alt" => __('Aprobar'), "title" => __('Aprobar'))), array('action' => 'aprobar', $row['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea confirmar el pago de este pedido?, debe ponerse en contacto con el cliente para la entrega')));
												echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Rechazar'), "title" => __('Rechazar'))), array('action' => 'rechazar', $row['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea rechazar este pedido?, el cliente será notificado de esta acción')));
											}

											if($row['estado'] == '2'){ //aprobado
												echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/send.png', array("alt" => __('Enviar'), "title" => __('Enviar'))), array('action' => 'enviar', $row['id']), array('escape' => false, 'confirm' => __('¿Está seguro que ha enviado este pedido?, el cliente será notificado de esta acción')));
											}

											if($row['estado'] == '4'){ //rechazado
												echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/approve.png', array("alt" => __('Aprobar'), "title" => __('Aprobar'))), array('action' => 'aprobar', $row['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea confirmar el pago de este pedido?, debe ponerse en contacto con el cliente para la entrega')));
											}
										
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

				<div id="mercadopago" class="tab-pane">


					<div class="filtro">
						<p>Filtrar por:</p>

							<button id="todos" onclick="window.location.href=WEBROOT+'ventas/index/1'" class="btn">Todos</button>
							<button id="proceso" onclick="window.location.href=WEBROOT+'ventas/filterProceso/1'" class="btn btn-warning">En proceso</button>	
							<button id="aprobado" onclick="window.location.href=WEBROOT+'ventas/filterAprobado/1'" class="btn btn-success">Aprobado</button>
							<button id="enviado" onclick="window.location.href=WEBROOT+'ventas/filterEnviado/1'" class="btn btn-primary">Enviado</button>
							<button id="rechazado" onclick="window.location.href=WEBROOT+'ventas/filterRechazado/1'" class="btn btn-danger">Rechazado</button>
					</div>

					<div class="um_box_mid_content_mid" id="index">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
							<thead>
								<tr role="row">
									<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 60px;">Id Cliente</th>
									<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 240px;">Nombre Cliente</th>
									<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 60px;">Id Artículo</th>
									<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 470px;">Nombre Artículo</th>
									<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 70px;">Cantidad</th>
									<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Total</th>
									<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 186px;">Fecha</th>
									<th style="width: 80px;">Estado</th>
									<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 90px;" aria-label="">Acción</th>
								</tr>
							</thead>
							<tbody>
					<?php       if (!empty($ventas_mp)) {
									$sl=0;
									
									
									 foreach ($ventas_mp as $row) { ?>
									
									<tr class="odd">
										<td class=""><?php echo $row['user_id']?></td>
										<td class=""><?php echo $row['nombre_user'] ?></td>
										<td class=""><?php echo $row['producto_id'] ?></td>
										<td class=""><?php echo $row['nombre_producto'] ?></td>
										<td class=""><?php echo $row['cantidad'] ?></td>
										<td class=""><?php echo $row['total'] ?></td>
										<td class=""><?php echo split(" ", $row['created'])[0] ?></td>
										<td class="hidden-480">
											<?php if($row['estado'] == 1){ ?>
												<span class="label label-sm label-warning">En proceso</span>
											<?php } ?>
											<?php if($row['estado'] == 2){ ?>
												<span class="label label-success arrowed">Aprobado</span>
											<?php } ?>
											<?php if($row['estado'] == 3){ ?>
											<span class="label label-info arrowed-right arrowed-in">Enviado</span>
											<?php } ?>
											<?php if($row['estado'] == 4){ ?>
												<span class="label label-danger arrowed-in">Rechazado</span>
											<?php } ?>
										</td> 
										<td class=" ">
										<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
										<?php 

											if($row['estado'] == '1'){ //En proceso  

												echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/approve.png', array("alt" => __('Aprobar'), "title" => __('Aprobar'))), array('action' => 'aprobar', $row['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea confirmar el pago de este pedido?, debe ponerse en contacto con el cliente para la entrega')));
												echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Rechazar'), "title" => __('Rechazar'))), array('action' => 'rechazar', $row['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea rechazar este pedido?, el cliente será notificado de esta acción')));
											}

											if($row['estado'] == '2'){ //aprobado
												echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/send.png', array("alt" => __('Enviar'), "title" => __('Enviar'))), array('action' => 'enviar', $row['id']), array('escape' => false, 'confirm' => __('¿Está seguro que ha enviado este pedido?, el cliente será notificado de esta acción')));
											}

											if($row['estado'] == '4'){ //rechazado
												echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/approve.png', array("alt" => __('Aprobar'), "title" => __('Aprobar'))), array('action' => 'aprobar', $row['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea confirmar el pago de este pedido?, debe ponerse en contacto con el cliente para la entrega')));
											}
										
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
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function() {

	var pagina = '<?php echo $pagina; ?>';

	if(pagina == '1'){
		$('#li_trans').removeClass('active');
		$('#transferencias').removeClass('active');
		$('#li_mp').addClass('active');
		$('#mercadopago').addClass('active');
	}
	
});

</script>