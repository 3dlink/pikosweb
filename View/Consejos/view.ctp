<style type="text/css">
  #izquierda{
    padding-right: 30px;
        max-width: 770px;
  }
  #imagen{
    width: 100%;
    height: 340px;
    background-image: url('<?php echo $this->webroot; ?>files/<?php echo $consejo["Consejo"]["imagen"];?>');
    background-repeat: no-repeat;
    background-size: contain;
    position: relative;
    max-width: 755px;
  }
  #content{
    padding: 20px 40px;
  }
  #derecha > label{
    font-size: 24px;
    margin-bottom: 30px;
  }
  .productos{
    width: 100%;
    margin-bottom: 20px;
    height: 200px;
    position: relative;
        max-width: 370px;
  }
  #tittle {
    position: absolute;
    bottom: 0;
    padding: 14px 0 0 14px;
    background-color: rgba(0,0,0,0.3);
    width: 100%;
    height: 60px;
    font-size: 24px;
    font-weight: 300;
    color: white;
  }
  p{
    margin-top: 20px;
    font-size: 20px;
  }
</style>
<div id="content" class="row">

  <div id="izquierda" class="col-md-8">
    <div id="imagen">
      <div id="tittle">
        <?php echo $consejo['Consejo']['nombre']; ?>
      </div>
    </div>
    <p>
      <b><?php echo $consejo['Consejo']['descripcion']; ?></b><br>
      <?php echo $consejo['Consejo']['contenido']; ?>
    </p>


  </div>
  <div id="derecha" class="col-md-4">
    <label>Pikos Recomienda</label>

    <?php foreach ($productos as $producto) { ?>

      <div class="productos" style="background-image:url('<?php echo $this->webroot;?>files/<?php echo $producto["Producto"]["imagen_principal"];?>'); background-repeat: no-repeat; background-size:cover;">
        <div style="cursor:pointer;" id="tittle">
          <a style="color: white; text-decoration: none;" href="<?php echo $this->webroot;?>productos/view/<?php echo $producto["Producto"]["id"];?>"><?php echo $producto['Producto']['name']; ?></a>
        </div>
      </div>

    <?php } ?>

  </div>

</div>
