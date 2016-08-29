<?php //debug($producto); ?>
<style type="text/css">
	#content {
	  margin-top: 24px;
	  padding: 0;
	  margin-bottom:0px;
	}

.fade-carousel .carousel-inner .item {
    height: 66vh;
}

</style>

<?php 
$paginas = 0;
  if(!empty($producto['Producto']['imagen_principal'])){
    $paginas++;
  }
  if(!empty($producto['Producto']['imagen_1'])){
    $paginas++;
  }
  if(!empty($producto['Producto']['imagen_2'])){
    $paginas++;
  }
  if(!empty($producto['Producto']['imagen_3'])){
    $paginas++;
  }
  if(!empty($producto['Producto']['imagen_4'])){
    $paginas++;
  }

  $paginas = ceil($paginas/3);
  
 ?>


<script type="text/javascript">

var paginas = '<?php echo $paginas; ?>';


$(document).ready(function() {
  if(paginas>1){
    $('#media').carousel({
      pause: true,
      interval: 5000,
    });
  }else{
    $('#media').carousel({
      pause: true,
      interval: false,
    });
  }
});
</script>


<div id="navegador">
	<a href="<?php echo $this->webroot; ?>productos/index/<?php echo $producto['Categoria']['id'] ?>" class="link"><?php echo ucwords($producto['Categoria']['name']);?></a>
	<a class="separador_links">></a>
	<a href="<?php echo $this->webroot; ?>productos/index/<?php echo $producto['Categoria']['id'] ?>_<?php echo $producto['Subcategoria']['id'] ?>" class="link"><?php echo $producto['Subcategoria']['name']; ?></a>
	<a class="separador_links">></a>
	<a class="link active"><?php echo $producto['Producto']['name'];?></a>
</div>

<div id="content">
 <div class='row' style="float: left;width: 100%;margin: 0px;">
    <div>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">

              <?php if(!empty($producto['Producto']['imagen_principal'])){ ?>
                <div class="col-md-4">
                  <div alt="" style="width:400px; background-size:cover; height: 400px; background-image:url('<?php echo $this->webroot."files/".$producto["Producto"]["imagen_principal"]; ?>');"></div>
                </div>    
              <?php } ?>      
              
                
              <?php if(!empty($producto['Producto']['imagen_2'])){ ?>
                <div class="col-md-4">
                  <div alt="" style="width:400px; background-size:cover; height: 400px; background-image:url('<?php echo $this->webroot."files/".$producto["Producto"]["imagen_2"]; ?>');"></div>
                </div>    
              <?php } ?>                
                
              <?php if(!empty($producto['Producto']['imagen_3'])){ ?>
                <div class="col-md-4">
                  <div alt="" style="width:400px; background-size:cover; height: 400px; background-image:url('<?php echo $this->webroot."files/".$producto["Producto"]["imagen_3"]; ?>');"></div>
                </div>    
              <?php } ?>         
            </div>
          </div>
          <div class="item">
            <div class="row">
                
              <?php if(!empty($producto['Producto']['imagen_4'])){ ?>
                <div class="col-md-4">
                  <div alt="" style="width:400px; background-size:cover; height: 400px; background-image:url('<?php echo $this->webroot."files/".$producto["Producto"]["imagen_4"]; ?>');"></div>
                </div>    
              <?php } ?>     
                
              <?php if(!empty($producto['Producto']['imagen_5'])){ ?>
                <div class="col-md-4">
                  <div alt="" style="width:400px; background-size:cover; height: 400px; background-image:url('<?php echo $this->webroot."files/".$producto["Producto"]["imagen_5"]; ?>');"></div>
                </div>    
              <?php } ?>         
            </div>
          </div>
        </div>
        <?php if($paginas > 1){ ?>
        <a data-slide="prev" href="#media" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
        <a data-slide="next" href="#media" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
        <?php }else{ ?>
        <a href="#media" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
        <a href="#media" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
        <?php } ?>
      </div>                          
    </div>
	<div id="descripcion_producto">
		<div class="btn-group btn-group-justified" role="group" aria-label="...">
		  <div class="btn-group" role="group">
		    <button id="pestanha_descripcion" type="button" class="btn_pestanha btn btn-default pestanha_activa">DESCRIPCION</button>
		  </div>
		  <div class="btn-group" role="group">
		    <button id="pestanha_pregunta" type="button" class="btn_pestanha btn btn-default">PREGUNTA</button>
		  </div>
		</div>
		<div id="caja_descripcion">
			<div id="descripcion_producto">
				<p>
				<?php echo $producto['Producto']['descripcion']; ?>
				</p>
			</div>
			<div id="caja_pregunta">
				<textarea id="pregunta_textarea" placeholder="Debe haber iniciado sesión para hacer una pregunta."></textarea>
				<button id="pregunta" type="button" class="btn btn-default btn_pikos medium">PREGUNTAR</button>
			</div>
		</div>

    <div style="width:300px;margin:0 auto;">
      <span style="float:left;font-size:20px;margin-top: 4px;margin-right:10px;"><b>Medidas : </b></span>
      <?php echo $this->Form->input("medida_id" ,array('type' => 'select', 'id'=>'medidas_select', 'style'=>'font-weight:bold', 'label' => false,'div' => false,'class'=>"form-control" ))?>
      <span id="precio" style="float:left;font-size:20px;margin-bottom: 20px;width:100%;"><b>Precio: Debe seleccionar una medida</b></span>
      <input type="hidden" id="precio_producto" value="0">
    </div>

    <div style="width:230px;margin:0 auto;">
      <span style="float:left;font-size:20px;margin-top: 4px;margin-right:10px;"><b>Cantidad : </b></span>
      <button id="menos" type="button" class="btn spinbox-down btn-sm btn-danger" style="float: left;">-</button>
      <input type="text" id="cantidad" class="spinbox-input form-control text-center" value="1" style="font-size:20px;width: 70px;float: left;">
      <button id="mas" type="button" class="btn spinbox-down btn-sm btn-success">+</button>
    </div>

		<div class="btn_carrito">
			<button id="btn_carrito" disabled type="button" class="btn btn-default btn_pikos">AGREGAR AL CARRITO</button>
		</div>
	</div>
</div>

<script type="text/javascript">

var inventario = 0;

$('#medidas_select').on('change', function() {
  if(this.value == 0){
    $('#cantidad').val(1);
    $('#precio').html('<b>Precio: Debe seleccionar una medida</b>');
    $('#btn_carrito').attr('disabled', 'disabled');
  }
  $.post(WEBROOT+'productos/getPrecios',{data:this.value},function(data){
    if(data){
      $('#precio').html('<b>Precio : '+data.precio+' BsF.</b>');
      $('#precio_producto').val(data.precio);
      $('#btn_carrito').prop('disabled', false);
      $('#cantidad').val(1);
      inventario = data.cantidad;
    }
  },'json');
});

  $('#menos').click(function() {
    var cant = $('#cantidad').val();
    if(cant <= 0)
      cant=1;
    else 
      cant--;
    $('#cantidad').val(cant);
  });
  $('#mas').click(function() {
    var cant = $('#cantidad').val();
    cant++;
    if(cant>inventario){
      cant--;
    }
    $('#cantidad').val(cant);
  });

  $('#btn_carrito').click(function() {
    var login = "<?php echo $this->UserAuth->isLogged();?>";
    if(login != 1)
      $('#exampleModal').modal('toggle');
    else{
      var cant = $('#cantidad').val();

      if(cant>0){
        var producto = '<?php echo ucwords($producto['Producto']['name']);?>';
        if(confirm('¿Seguro que desea agregar '+producto+' a su carrito de compras?')){
          var data = {
            id : "<?php echo $producto['Producto']['id'];?>",
            cantidad : cant,
            medida_id : $("#medidas_select").val(),
            medida : $("#medidas_select option:selected").html(),
            precio : $('#precio_producto').val()
          };
          $.ajax({
            url:WEBROOT+'productos/agregaralcarrito',
            data : data,
            dataType: 'json',
            success: function(data){
              if(data == 1){
                window.location = '<?php echo $this->webroot;?>carrito';
              }else{
                alert('No se ha podido guardar, inténtelo nuevamente.')
              }
            },
            error: function(a,e,i){
              console.log(i);
            }
          });
        }
      }else{
        alert('La cantidad debe ser un número mayor a 0');
      }
    }
  });


  $('#pregunta').click(function() {
    var login = "<?php echo $this->UserAuth->isLogged();?>";
    if(login != 1)
      $('#exampleModal').modal('toggle');
    else{
      if($('#pregunta_textarea').val() == ""){
        alert('Por favor, escribe una pregunta.');
      }else{
        $('#pregunta').html("PREGUNTANDO...");
        var data = {
          pregunta : $('#pregunta_textarea').val(),
          nombre : "<?php echo $producto['Producto']['name'];?>",
          categoria : "<?php echo $producto['Categoria']['name'];?>",
          subcategoria : "<?php echo $producto['Subcategoria']['name'];?>"
        };

        $.ajax({
          url:WEBROOT+'productos/sendQuestion',
          data : data,
          dataType: 'json',
          success: function(data){
            if(data == 1){
              alert('Muchas gracias. Pregunta enviada. En breve momentos lo estaremos contactando.');
              $('#pregunta').html("PREGUNTANDO...");
              $('#pestanha_descripcion').click();
            }
          },
          error: function(a,e,i){
            console.log(i);
          }
        });
      }
    }

  });


$(document).ready(function($) {
		$('body').scrollTo('#content',1500);

  var imagen_principal = '<?php echo $this->webroot."files/".$producto["Producto"]["imagen_principal"]; ?>';
  $('.slide-1').css({
  	'background-image':'url('+imagen_principal+')',
  	'height': '100%',
  	'background-size': 'cover'
		});

	<?php if(!empty($producto['Producto']['imagen_2'])){ ?>
		var imagen_segunda = '<?php echo $this->webroot."files/".$producto["Producto"]["imagen_2"]; ?>';
  	$('.slide-2').css({
  		'background-image':'url('+imagen_segunda+')',
  		'height': '100%',
  		'background-size': 'cover'
  		});
  <?php } ?>
  <?php if(!empty($producto['Producto']['imagen_3'])){ ?>
		var imagen_segunda = '<?php echo $this->webroot."files/".$producto["Producto"]["imagen_3"]; ?>';
  	$('.slide-3').css({
  		'background-image':'url('+imagen_segunda+')',
  		'height': '100%',
  		'background-size': 'cover'
  		});
  <?php } ?>
  <?php if(!empty($producto['Producto']['imagen_4'])){ ?>
		var imagen_segunda = '<?php echo $this->webroot."files/".$producto["Producto"]["imagen_4"]; ?>';
  	$('.slide-4').css({
  		'background-image':'url('+imagen_segunda+')',
  		'height': '100%',
  		'background-size': 'cover'
  		});
  <?php } ?>
  <?php if(!empty($producto['Producto']['imagen_5'])){ ?>
		var imagen_segunda = '<?php echo $this->webroot."files/".$producto["Producto"]["imagen_5"]; ?>';
  	$('.slide-5').css({
  		'background-image':'url('+imagen_segunda+')',
  		'height': '100%',
  		'background-size': 'cover'
  		});
  <?php } ?>


});

$('.btn_pestanha').click(function(){
	$(this).blur();
	$('.btn_pestanha').removeClass('pestanha_activa');
	$(this).addClass('pestanha_activa');
});

$('#pestanha_descripcion').click(function(){
	$('#descripcion_producto').css({'display': 'block'});
	$('#caja_pregunta').css({'display': 'none'});
});

$('#pestanha_pregunta').click(function(){
	$('#caja_pregunta').css({'display': 'block'});
	$('#pregunta_textarea').focus();
});



</script>