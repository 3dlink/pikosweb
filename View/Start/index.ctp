<style type="text/css">
#content{
  min-height: 645px;
}

.logo{
  margin: 0 auto;
  width: 200px;
  height: 117px;
  background-image: url('<?php echo $this->webroot; ?>img/logo.png');
  background-size: cover;
}

.titulo_imagen{
  position: absolute;
  width: 400px;
  height: 50px;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  font-weight: bold;
  text-align: center;
  font-size: 20px;
  padding-top: 10px;
  color: white;

}

</style>

<script type="text/javascript">

$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: 5000,
  });
});

</script>
<div class='row' style="float: left;width: 100%;margin: 0px;margin-top: 10px;">
  <div>
    <div class="carousel slide media-carousel" id="media">
      <div class="carousel-inner">
       <?php 
          $k=0;
          $repeticiones = ceil(count($productos)/3);
            for ($i=0; $i < $repeticiones; $i++){?>
              <div class="item <?php if($i==0) echo "active"; ?>">
                <div class="row">
                <?php for ($j=0; $j < 3; $j++){ 
                    if(isset($productos[$k])){
                  ?>
                <div class="col-md-4">
                  <a style="position:relative;" class="thumbnail" href="<?php echo $this->webroot;?>productos/view/<?php echo $productos[$k]['Producto']['id']; ?>'">
                  <div class="titulo_imagen"><?php echo $productos[$k]['Producto']['name']; ?></div><div alt="" style="width:400px; background-size:cover; height: 400px; background-image:url('<?php echo $this->webroot."files/".$productos[$k]["Producto"]["imagen_principal"]; ?>');"></div></a>
                </div> 
        <?php $k++;}
              }?>      
              </div>
            </div>
          <?php  }
           ?>
      </div>
      <a data-slide="prev" href="#media" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
      <a data-slide="next" href="#media" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
    </div>                          
  </div>                        
</div>


<div id="content_2">




  <div id="content" >
  <div style="display: table-row;  height: 100%;">
  <div id="descripcion_pikos">
    <div class="logo"></div>
    <h3>Lencería combinable</h3>
    <p>
      Pikos es una empresa venezolana que nace con la idea de mejorar la oferta nacional de productos textiles para camas, ofreciendo calidad y diseños novedosos a precios competitivos.
    <br><br>
      Nuestros productos están elaborados con las mejores telas compradas en nuestro país, 180 hilos, 50% algodón y 50% polyester, resistentes al lavado y secado mecánicos, con una gran variedad de colores y estampados para complacer el gusto de un público muy variado. 
    </p>

  </div>
  </div>
    <div class="redes">
      <a target="_blank" href="https://www.facebook.com/pages/Pikos/169487866458456?fref=ts"><img class="img_redes" src="<?php echo $this->webroot; ?>img/facebook.png"></a>
      <a target="_blank" href="https://instagram.com/pikoslenceriacombinable/"><img class="img_redes" src="<?php echo $this->webroot; ?>img/instagram.png"></a>
    </div>
  </div>
</div>



<script type="text/javascript">

$('.down').click(function() {
  $('body').scrollTo('#content',1500);
});


<?php $h=1;
foreach ($productos as $producto) {?>
  var imagen_principal = '<?php echo $this->webroot."files/".$producto["Producto"]["imagen_principal"]; ?>';
  $('.slide-'+'<?php echo $h; ?>').css('background-image','url('+imagen_principal+')');
<?php } ?>

</script>