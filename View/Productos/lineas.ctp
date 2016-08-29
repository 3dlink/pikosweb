<?php $lineas = $subcategoria['Linea']; ?>
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
	<a class="link"><?php echo ucwords($subcategoria['Subcategoria']['name']);?></a>
	<?php }?>
	<a class="separador_links">></a>
	<a class="link active">Escoja una línea</a>
</div>

<div id="content">
	<?php foreach ($lineas as $linea) { ?>

	<a href="<?php echo $this->webroot;?>productos/index/<?php echo $categoria['Categoria']['id'].'_'.$subcategoria['Subcategoria']['id'].'_'.$linea['id'];?>" class="item_producto">
		<div style="
		width:305px;border-radius: 15px;height:300px;background-size:cover;background-image:url('<?php echo $this->webroot;?>files/<?php echo $linea['imagen'];?>');
		"></div>
		<div class="descripcion_item">
			<h2><?php echo ucwords($linea['nombre']);?></h2>
		</div>
	</a>
	<?php } ?>
</div>
