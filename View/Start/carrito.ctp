<?php 
		echo $this->Html->css('ace.min');
		echo $this->Html->css('ace-rtl');
		echo $this->Html->css('ace-skins');
		echo $this->Html->css('jquery.gritter');

		echo $this->Html->script('lib/ace-extra.min');
		echo $this->Html->script('lib/typeahead-bs2.min');
		echo $this->Html->script('lib/ace-elements.min');
		echo $this->Html->script('lib/ace.min');

?>
<style type="text/css">

input[type=radio].ace+.lbl {
	font-weight: bold !important;
}

body{
	font-family: 'GenomeThin'; 
	font-weight: bold;
}

th{
	color: rgb(57, 69, 92);
}

nav > div{
	display: inline-block !important;
	cursor: pointer !important;
	min-width: 130px !important;
	line-height: 33px !important;
  text-align: center !important;
}

#eliminar{
	cursor: pointer;
	font-size: 16px;
}

nav > div:hover{
	color: #C6AC73 !important;
}

.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
    background-color: #e8e8e8 !important;
    background-image: -webkit-linear-gradient(top,#f5f5f5 0,#e8e8e8 100%) !important;
    background-image: -o-linear-gradient(top,#f5f5f5 0,#e8e8e8 100%) !important;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#e8e8e8)) !important;
    background-image: linear-gradient(to bottom,#f5f5f5 0,#e8e8e8 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0) !important;
    background-repeat: repeat-x !important;
}

.dropdown-menu > li > a:hover{
	color: #C6AC73 !important;
}
.dropdown-menu>li>a {
  font-size: 14px !important;
  padding-left: 20px !important;
  padding-right: initial !important;
  margin-bottom: initial !important;
  margin-top: initial !important;
}

.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
	background-color: white !important;
	color: #C6AC73 !important;
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.btn{
	cursor: pointer;    
	background-color: white !important;
  border-color: white !important;
  color: inherit !important;
  margin-top: -1px !important;
  border: none !important;
  text-shadow: none !important;
}

#navegador{
	font-size: 24px;
	font-weight: bold;
	margin-bottom: 20px;
}
#btn_pagar{
  background-color: rgb(57, 69, 92) !important;
  color: white !important;
      border-radius: 5px;
}
#caja_formas{
	margin-bottom: 30px;
    padding-left: 30px;
}
.infobox {
  height: 125px;
  margin-bottom: 20px;
  width: 220px;
}
#state{
	margin-left: 107px;
	font-weight: bold;
}


@media(max-width: 480px){
	#nombre_eliminar{
		font-size: 3vw;
		width: 40px !important;
	}
}

@media(max-width: 580px){
#state {
    margin-left: 30px;
    }
  }

@media(max-width: 860px){
#navegador {
    width: 80vw !important;
    }
  }
</style>

<div id="navegador" style="width:100%;">
	Mi carrito
</div>
<?php $super_total = 0; ?>

<?php if(count($user['Productos'])>0){ ?>


<div class="row">
	<label id="state">Estados:</label>
	<div class=" infobox-container">
		<div class="infobox infobox-green">
			<div class="infobox-data">
							<span class="label">Apartado</span>
				<div class="infobox-content">El pedido está apartado para la compra del cliente</div>
			</div>
		</div>

		<div class="infobox infobox-blue">
			<div class="infobox-data">
				<span class="label label-sm label-warning">En proceso</span>
				<div class="infobox-content">Pikos está esperando el pago del pedido o el pedido fue pagado y está siendo confirmado por Pikos</div>
			</div>
		</div>

		<div class="infobox infobox-blue">
			<div class="infobox-data">
							<span class="label label-success arrowed">Aprobado</span>
				<div class="infobox-content">Pikos confirmó el pago y procederá a llamar al usuario para enviar el pedido</div>
			</div>
		</div>

		<div class="infobox infobox-blue">
			<div class="infobox-data">
							<span class="label label-danger arrowed-in">Rechazado</span>
				<div class="infobox-content">Ocurrió algún problema en la confirmación del pago, contáctenos: contacto@pikos.com.ve</div>
			</div>
		</div>

		<div class="infobox infobox-blue">
			<div class="infobox-data">
						<span class="label label-info arrowed-right arrowed-in">Enviado</span>
				<div class="infobox-content">Pikos envió el pedido por el método de preferencia del cliente. Que lo disfrute!</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12">
		<table id="simple-table" class="table table-striped table-bordered table-hover">
			<thead>
				<tr data-product-id="0" data-product-total="0">
					<th class="center" style="width: 35px;">
						<label class="pos-rel">
							<input id="select_all" type="checkbox" class="ace">
							<span class="lbl"></span>
						</label>
					</th>
					<th class="center">Producto</th>
					<th class="hidden-480 center">Medida</th>
					<th class="hidden-480 center">Precio</th>
					<th class="hidden-480 center">Cantidad</th>
					<th class="center">Total</th>
					<th style="width: 80px;">Estado</th>
					<th id="nombre_eliminar" style="width: 80px;">Eliminar</th>
				</tr>
			</thead>

			<tbody>
				<?php $x=0;?>

				<?php foreach ($user['Productos'] as $producto) { ?>
					<?php 
						$total = $producto['ProductosUser']['cantidad'] * $producto['ProductosUser']['precio']; 
						$super_total += $total;
					?>
				<tr class="" data-product-id="<?php echo $producto['ProductosUser']['id']; ?>" data-product-block="<?php echo $producto['ProductosUser']['estado']; ?>" data-product-total="<?php echo $total; ?>">
					<td class="center">

							<label class="pos-rel">
								<input type="checkbox" <?php if($producto['ProductosUser']['estado'] != 0){ ?> disabled="disabled" <?php } ?>class="ace items" >
								<span class="lbl"></span>
							</label>
						
					</td>

					<td>
						<a target="_blank" href="<?php echo $this->webroot; ?>productos/view/<?php echo $producto['id'];?>"><?php echo ucfirst($producto['name']); ?></a>
					</td>
					<td class="hidden-480"><?php echo $producto['ProductosUser']['medida']; ?></td>
					<td class="hidden-480"><?php echo $producto['ProductosUser']['precio']; ?></td>
					<td class="hidden-480"><?php echo $producto['ProductosUser']['cantidad']; ?></td>
					
					<td><?php echo $total; ?></td>
 
					<td>
						<?php if($producto['ProductosUser']['estado'] == 0){ ?>
							<span class="label">Apartado</span>
						<?php } ?>
						<?php if($producto['ProductosUser']['estado'] == 1){ ?>
							<span class="label label-sm label-warning">En proceso</span>
						<?php } ?>
						<?php if($producto['ProductosUser']['estado'] == 2){ ?>
							<span class="label label-success arrowed">Aprobado</span>
						<?php } ?>
						<?php if($producto['ProductosUser']['estado'] == 3){ ?>
						<span class="label label-info arrowed-right arrowed-in">Enviado</span>
						<?php } ?>
						<?php if($producto['ProductosUser']['estado'] == 4){ ?>
							<span class="label label-danger arrowed-in">Rechazado</span>
						<?php } ?>
					</td> 
					<td>
						<?php 
							echo $this->Form->postLink($this->Html->image('delete.png', array("alt" => __('Eliminar'), "title" => __('Eliminar'))), array('action' => 'deleteProducto', $producto['ProductosUser']['id']), array('escape' => false, 'confirm' => __('¿Está seguro que desea eliminar este producto del carrito?')));
						
						?>
						<!-- <a href="#" onclick="if (confirm(&quot;¿Seguro que desea eliminar el producto del carrito?&quot;)) {  } event.returnValue = false; return false;"><img src="<?php echo $this->webroot;?>img/delete.png" alt="Eliminar" title="Delete"></a> -->
					</td>
				</tr>

				<?php $x++;?>
				<?php } ?>


			</tbody>
		</table>
	</div><!-- /.span -->
</div>


<div class="btn_carrito">
	<button type="button" id="btn_pagar" type="button" class="btn btn-default btn_pikos">PAGAR</button>
</div>

<?php }else{ ?>
	
	<p style="text-align:center;width:100%;">
		<b>Usted no posee artículos en el carrito.</b>
	</p>

<?php } ?>

<p style="margin-bottom:60px;text-align:center;">
<a target="_blank" href="<?php echo $this->webroot;?>comoComprar">Conoce nuestros métodos de pago</a>
</p>


<div class="modal fade" id="modal_pagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button id="close_modal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Elija su forma de pago</h4>
      </div>
      <div class="modal-body">
        <form>
          <div id="caja_formas" class="form-group">
          	<div class="radio">
							<label>
								<input name="form-field-radio" id="trans" type="radio" checked="checked" class="escogido ace input-lg">
								<span class="lbl bigger-120">  Depósito o Transferencia Bancaria</span>
							</label>
						</div>
          	<div class="radio">
							<label>
								<input name="form-field-radio" id="mp" type="radio" class="ace input-lg">
								<span class="lbl bigger-120">  Mercadopago (+7%)</span>
							</label>
						</div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      	<span style="float: left;font-size: 24px;"><b>TOTAL : </b><b id="tot"></b></span>
        <button class="btn btn-success btn-lg" type="button" id="pagar">Pagar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

// checkbos de seleccionar todas las comunicaciones
$('#select_all').on('click', function(event) {
	if ($(this).is(':checked')) {
        $('.items').each(function() {
        	if($(this).parent().parent().parent().attr('data-product-block') == 0){
        		$(this).parent().parent().parent().addClass('seleccionado');
            this.checked = true;
          }
        });
    }else {
    	$('.items').each(function() {
            this.checked = false;
        		$(this).parent().parent().parent().removeClass('seleccionado');
        });
    }
});

$('tr').click(function(event) {
	if($(this).attr('data-product-block') ==0){
		if($(this).hasClass('seleccionado')){
			$(this).removeClass('seleccionado');	
		}else{
			$(this).addClass('seleccionado');
		}
	}
});

var total = 0;
var total_mp = 0;
var data = [];

$('#btn_pagar').on('click', function(event) {
	total = 0;
	total_mp = 0;
	data = [];
	$.each($('.seleccionado'), function() {
			item = {
				'id' : $(this).attr('data-product-id'),
				'total' : $(this).attr('data-product-total')
			};
			data.push(item);
	});

	for (var i = 0; i < data.length; i++) {
		total += parseFloat(data[i].total);
	};
	$('#tot').html(total+' BsF.');

	if(data.length > 0){
			$('#modal_pagar').modal('toggle');
	}else{
		alert('Debe seleccionar el/los productos a pagar');
	}


});

$('#trans').click(function(event) {
	$('#tot').html(total+' BsF.');
	$(this).addClass('escogido');
	$('#mp').removeClass('escogido');
});

$('#mp').click(function(event) {
	$(this).addClass('escogido');
	$('#trans').removeClass('escogido');
	total_mp = total*0.07;
	total_mp += total;
	$('#tot').html(total_mp+' BsF.');
});


$('#pagar').click(function(event) {
	if($("#trans").hasClass('escogido')){
		$('#pagar').html("Procesando...");

		var ids = [];
		for (var i = 0; i < data.length; i++) {
			ids.push(data[i].id);
		};

	  $.post(WEBROOT+'start/sendMailTrasnferencia',{data:ids},function(data){
			if(data == 1){
				alert('Muchas gracias. Le hemos enviado a su correo nuestros datos bancarios y los pasos a seguir');
				$('#pagar').html("Pagar");
	    	$('#modal_pagar').modal('hide');
    		location.reload();
			}
		},'json');

	}else{
		$('#pagar').html("Procesando...");

		var ids = [];
		for (var i = 0; i < data.length; i++) {
			ids.push(data[i].id);
		};

	  $.post(WEBROOT+'start/mercadopago',{data:ids},function(data){
	  	if(data!=''){
				$('#pagar').html("Pagar");
	    	$('#modal_pagar').modal('hide');
				window.location = data;
			}
		},'json');

	}
});

</script>