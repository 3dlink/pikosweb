
<style type="text/css">
	#content {
	  margin-top: 24px;
	  padding: 0 100px;
	}
</style>

<div id="navegador">
	<a href="<?php echo $this->webroot.'productos/index/'.$categoria['Categoria']['id'];?>" class="link <?php if(empty($subcategoria)){?> active <?php } ?>"><?php echo ucwords($categoria['Categoria']['name']);?></a>
	<?php if(!empty($subcategoria)){?>
	<a class="separador_links">></a>
	<a href="<?php echo $this->webroot;?>productos/index/<?php echo $categoria['Categoria']['id'].'_'.$subcategoria['Subcategoria']['id'];?>" class="link active"><?php echo ucwords($subcategoria['Subcategoria']['name']);?></a>
		<?php if(!empty($linea)){?>
		<a class="separador_links">></a>
		<a class="link active"><?php echo ucwords($linea['Linea']['nombre']);?></a>
		<?php }?>
	<?php }?>
</div>

<div id="content">
	<?php foreach ($productos as $producto) { ?>
	<?php 
		$precios = array();
		foreach ($producto['Medida'] as $medida) {
			array_push($precios,$medida['precio']);
		}
		$menor = min($precios);

	 ?>

	<a href="<?php echo $this->webroot;?>productos/view/<?php echo $producto['Producto']['id'];?>" class="item_producto">
		<div style="
		width:305px;border-radius: 15px;height:300px;background-size:cover;background-image:url('<?php echo $this->webroot;?>files/<?php echo $producto['Producto']['imagen_principal'];?>');
		"></div>
		<div class="descripcion_item">
			<h2><?php echo ucwords($producto['Producto']['name']);?></h2>
			<h3>Desde <?php echo $menor;?> BsF.</h3>
		</div>
	</a>
	<?php } ?>
<!-- 	<div class="item_producto">
		<img src="http://lorempixel.com/g/306/300">
		<div class="descripcion_item">
			<h2>Nombre del producto</h2>
			<h3>Desde 12.345,00 BsF.</h3>
		</div>
	</div>
	<div class="item_producto item_final">
		<img src="http://lorempixel.com/g/306/300">
		<div class="descripcion_item">
			<h2>Nombre del producto</h2>
			<h3>Desde 12.345,00 BsF.</h3>
		</div>
	</div>
	<div class="item_producto">
		<img src="http://lorempixel.com/g/306/300">
		<div class="descripcion_item">
			<h2>Nombre del producto</h2>
			<h3>Desde 12.345,00 BsF.</h3>
		</div>
	</div>
	<div class="item_producto">
		<img src="http://lorempixel.com/g/306/300">
		<div class="descripcion_item">
			<h2>Nombre del producto</h2>
			<h3>Desde 12.345,00 BsF.</h3>
		</div>
	</div>
	<div class="item_producto item_final">
		<img src="http://lorempixel.com/g/306/300">
		<div class="descripcion_item">
			<h2>Nombre del producto</h2>
			<h3>Desde 12.345,00 BsF.</h3>
		</div>
	</div> -->
</div>
