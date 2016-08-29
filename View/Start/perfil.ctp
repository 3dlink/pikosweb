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
  height: 100px;
  margin-bottom: 20px;
  width: 220px;
}
#state{
	margin-left: 107px;
	font-weight: bold;
}
</style>


<div id="navegador" style="width:100%;">
	Editar Perfil
</div>

<div class="um_box_mid_content_mid" id="register">
				<div class="um_box_mid_content_mid_left">

					<?php echo $this->Form->create('User'); ?>
					<?php echo $this->Form->input("id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Usuario </label>
						<div class="col-sm-9"><?php echo $this->Form->input("username" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Nombre </label>
						<div class="col-sm-9"><?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Apellido </label>
						<div class="col-sm-9"><?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1">Correo Electrónico</label>
						<div class="col-sm-9"><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1">Teléfono</label>
						<div class="col-sm-9"><?php echo $this->Form->input("phone" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
						<div style="clear:both"></div>
					</div>
					<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit" id="add" style="color:white !important;background-color: #6fb3e0!important;border-color: #6fb3e0;">
					<i class="icon-ok bigger-110"></i>
					Guardar
				</button>
			</div>
		</div>
					
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>


<script type="text/javascript">
$('#UserPerfilForm').attr('onSubmit', 'return confirm("¿Está seguro de cambiar los datos?");');
</script>