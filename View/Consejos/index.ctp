<style type="text/css">
	#content {
	  margin-top: 24px;
	}
	
.descripcion_item {
    padding: 0px !important;
}

</style>

<div id="content">

	<div style="margin-bottom:30px;">
    <h3>Consejos Pikos</h3>
    <p>
      En esta sección les ofrecemos algunos consejos relacionados con el cuidado de su lencería, un vistazo a las últimas tendencias, colores, estilos textiles, ideas para decorar, enlaces y sitios interesantes para mantenerse actualizados.
      <br><br>  
			Trabajamos con la idea de que el dormitorio es un ambiente importante dentro de nuestros hogares, debe ser un sitio de relax, de descanso, transmitir paz y tranquilidad. 
    </p>
  </div>


	<?php foreach ($consejos as $consejo) { ?>
	<a href="<?php echo $this->webroot;?>consejos/view/<?php echo $consejo['Consejo']['id'];?>" class="item_producto">
		<div style="width:305px;height:300px;background-size:cover;border-radius: 15px;background-image:url('<?php echo $this->webroot;?>files/<?php echo $consejo['Consejo']['imagen'];?>');"></div>
		<div class="descripcion_item">
			<h2><?php echo ucwords($consejo['Consejo']['nombre']);?></h2>
			<h3><?php echo $consejo['Consejo']['descripcion'];?></h3>
		</div>
	</a>
	<?php } ?>

</div>
