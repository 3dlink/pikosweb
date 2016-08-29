<?php 
		echo $this->Html->css('circle');
 ?>

<style type="text/css">

.c100{
	margin-top: 15px;
}

.c100:after {
	background-color: white;
}
.punto{
	float: left;
	width: 45%;
	margin-bottom: 20px;
  padding: 15px;
  border-radius: 5px;
  box-shadow: 0px 0px 2px #888888;
}
	#content {
	  margin-top: 24px;
	}
.puntos{
	    margin: 0 auto;
}
.titulo_punto{
	font-size: 24px;
}
.descripcion_punto{
	    margin-top: 16px;
    font-size: 19px;
}
.clearfix{
	text-align: right;
}
.verde{
  background-color: #D2E0CD;
  border: solid 1px #ACC6A3;
  color: #628E52;
}

.lverde > span {
	color: #628E52 !important;
}

.bverde{
    border: 0.08em solid #628E52 !important;
}
.azul{
  background-color: #A5B4B1;
  border: solid 1px #7B9590;
  color: #3E6B61;
}

.lazul > span {
	color: #3E6B61 !important;
}

.bazul{
    border: 0.08em solid #3E6B61 !important;
}
.beige{
  background-color: #FFF1E9;
  border: solid 1px #E8CEBF;
  color: #A67B60;
}

.lbeige > span {
	color: #A67B60 !important;
}

.bbeige{
    border: 0.08em solid #A67B60 !important;
}
.rosado{
  background-color: #F3DEE2;
  border: solid 1px #DBB4BA;
  color: #9D5B65;
}

.lrosado > span {
	color: #9D5B65 !important;
}

.brosado{
    border: 0.08em solid #9D5B65 !important;
}
#tr_movil{
	display: none;
}




@media(max-width:1090px){
	.puntos > .punto{
	width: 100%;
	float: none;
	margin-left: 0px !important;
	margin-bottom: 20px !important;
}
}
</style>

<div id="content">
 <div style="margin-bottom:30px;">
    <h3>¿Cómo Comprar?</h3>
    <p>
    	<img style="width: 100px;" src="<?php echo $this->webroot; ?>img/logo.png">
       te ofrece dos formas sencillas y seguras de pagar tu pedido, transferencia bancaria y mercadopago, para cada forma de pago contamos con un servicio de correo electrónico cada vez que cambie el estado de tu pedido para mantenerte informado siempre. <br><br>Aquí te explicamos los pasos para obtener tu pedido mediante nuestras formas de pago:
    </p>
    </p>
    <br>
    <br>

    <p><b>Transferencia o Depósito Bancario</b></p>
  </div>
<div style="float:left;margin-bottom:60px;">
<div class="puntos">
	<div class="punto verde">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p20 lverde">
		      <span>20%</span>
		      <div class="slice">
	          <div class="bar bverde"></div>
	          <div class="fill"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Elige tu Producto</b></span>
				<div class="descripcion_punto">Entra en cualquier categoría que ofrece Pikos y elige el producto que más te guste, puedes preguntarnos cualquier detalle.</div>
		  </div>
		</div>
	</div>
	<div style="margin-left:10%;" class="punto azul">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p40 lazul">
		      <span>40%</span>
		      <div class="slice">
	          <div class="bar bazul"></div>
	          <div class="fill"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Agrégalo a tu Carrito de Compras</b></span>
				<div class="descripcion_punto">Al final de la descripción del producto encontrarás el botón "Agregar al Carrito".</div>
		  </div>
		</div>
	</div>
	<div class="punto beige" style="margin-bottom:0px;">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p60 lbeige">
		      <span>60%</span>
		      <div class="slice">
	          <div class="bar bbeige"></div>
	          <div class="fill bbeige"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Pagar</b></span>
				<div class="descripcion_punto">Al hacer click en PAGAR y elegir Transferencia/Depósito te llegará un correo electrónico con nuestros datos bancarios para que hagas el depósito o la transferencia de tu pedido.</div>
		  </div>
		</div>
	</div>
	<div style="margin-left:10%;" class="punto rosado">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p80 lrosado">
		      <span>80%</span>
		      <div class="slice">
	          <div class="bar brosado"></div>
	          <div class="fill brosado"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Envíanos la constancia de pago</b></span>
				<div class="descripcion_punto">Envíanos a nuestro correo electrónico contacto@pikos.com.ve el comprobante del depósito bancario o la constancia de la transferencia electrónica.</div>
		  </div>
		</div>
	</div>

	<div class="punto verde" style="margin-left: 28%;margin-top: 10px;">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p100 lverde">
		      <span>100%</span>
		      <div class="slice">
	          <div class="bar bverde"></div>
	          <div class="fill bverde"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Envío</b></span>
				<div class="descripcion_punto">Pikos confirmará el pago y te llamará al número telefónico que ingresaste en el registro para enviarte el pedido a donde lo desees.</div>
		  </div>
		</div>
	</div>
</div>
<div style="width:100%;float:left;margin-top:30px;"><p>Para cualquier información adicional <a href="<?php $this->webroot;?>contacto" target="_blank">contáctanos</a> </p></div>
</div>

	<div style="margin-bottom:30px; width:100%; float:left;">
    <p><b>Mercadopago</b></p>
  </div>
<div style="float:left;margin-bottom:60px;">
<div class="puntos">
	<div class="punto verde">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p25 lverde">
		      <span>25%</span>
		      <div class="slice">
	          <div class="bar bverde"></div>
	          <div class="fill"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Elige tu Producto</b></span>
				<div class="descripcion_punto">Entra en cualquier categoría que ofrece Pikos y elige el producto que más te guste, puedes preguntarnos cualquier detalle.</div>
		  </div>
		</div>
	</div>
	<div style="margin-left:10%;" class="punto azul">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p50 lazul">
		      <span>50%</span>
		      <div class="slice">
	          <div class="bar bazul"></div>
	          <div class="fill"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Agrégalo a tu Carrito de Compras</b></span>
				<div class="descripcion_punto">Al final de la descripción del producto encontrarás el botón "Agregar al Carrito".</div>
		  </div>
		</div>
	</div>
	<div class="punto beige" style="margin-bottom:0px;">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p75 lbeige">
		      <span>75%</span>
		      <div class="slice">
	          <div class="bar bbeige"></div>
	          <div class="fill bbeige"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Pagar</b></span>
				<div class="descripcion_punto">Al hacer click en PAGAR y elegir <b>Mercadopago</b>, el sistema te llevará al sitio de pago para que ingreses tus datos y tu forma de pago (tarjeta de crédito, transferencia o depósito bancario).</div>
		  </div>
		</div>
	</div>
	<div style="margin-left:10%;" class="punto rosado">
		<div class="page">
		  <div class="clearfix">
		    <div class="c100 p100 lverde">
		      <span>100%</span>
		      <div class="slice">
	          <div class="bar bverde"></div>
	          <div class="fill bverde"></div>
		      </div>
	      </div>
				<span class="titulo_punto"><b>Envío</b></span>
				<div class="descripcion_punto">Pikos confirmará el pago y te llamará al número telefónico que ingresaste en el registro para enviarte el pedido a donde lo desees.</div>
		  </div>
		</div>
	</div>
</div>
<div style="width:100%;float:left;margin-top:30px;"><p>Para cualquier información adicional ingresa en  <a href="http://www.mercadopago.com" target="_blank"><img src="<?php echo $this->webroot; ?>img/mercadopago.png"></a> </p></div>

</div>


</div>