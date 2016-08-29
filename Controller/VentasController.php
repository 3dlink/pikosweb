<?php
App::uses('AppController', 'Controller');

class VentasController extends AppController {
	public $components = array('Paginator', 'Session');
	public $uses = array('Categoria','Usermgmt.User','Subcategoria','Producto','Estado','ProductoUser','Medida');

	public function index($pagina = null) {
		$this->ProductoUser->recursive = 1;
		$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'0','estado <> 0')));
		$ventas_mp = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'1','estado <> 0')));
		$tyd = array();
		$mp = array();

		foreach ($ventas_tyd as $venta) {
			$user = $this->User->findById($venta['ProductoUser']['user_id']);
			$product = $this->Producto->findById($venta['ProductoUser']['producto_id']);
			$total = $venta['ProductoUser']['precio'] * $venta['ProductoUser']['cantidad'];
			array_push($tyd, array('id'=>$venta['ProductoUser']['id'], 'producto_id'=>$venta['ProductoUser']['producto_id'],'nombre_producto'=>$product['Producto']['name'], 'user_id'=>$venta['ProductoUser']['user_id'], 'nombre_user'=>$user['User']['first_name'].' '.$user['User']['last_name'], 'cantidad'=>$venta['ProductoUser']['cantidad'],'estado'=>$venta['ProductoUser']['estado'], 'created'=>$venta['ProductoUser']['created'], 'total'=>$total));
		}

		foreach ($ventas_mp as $venta) {
			$user = $this->User->findById($venta['ProductoUser']['user_id']);
			$product = $this->Producto->findById($venta['ProductoUser']['producto_id']);
			$total = $venta['ProductoUser']['precio'] * $venta['ProductoUser']['cantidad'];
			array_push($mp, array('id'=>$venta['ProductoUser']['id'], 'producto_id'=>$venta['ProductoUser']['producto_id'],'nombre_producto'=>$product['Producto']['name'], 'user_id'=>$venta['ProductoUser']['user_id'], 'nombre_user'=>$user['User']['first_name'].' '.$user['User']['last_name'], 'cantidad'=>$venta['ProductoUser']['cantidad'],'estado'=>$venta['ProductoUser']['estado'], 'created'=>$venta['ProductoUser']['created'], 'total'=>$total));
		}

		$this->set('ventas_mp',$mp);
		$this->set('ventas_tyd',$tyd);

		if($pagina!=null){
			$this->set('pagina',1);
		}

		$this->layout='default';
	}

	public function filterProceso($forma = null){

		if($forma == 0){
			$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'0','estado'=>'1')));
		}else{
			$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'1','estado'=>'1')));
		}
		
		$tyd = array();

		foreach ($ventas_tyd as $venta) {
			$user = $this->User->findById($venta['ProductoUser']['user_id']);
			$product = $this->Producto->findById($venta['ProductoUser']['producto_id']);
			$total = $product['Producto']['precio'] * $venta['ProductoUser']['cantidad'];
			array_push($tyd, array('id'=>$venta['ProductoUser']['id'], 'producto_id'=>$venta['ProductoUser']['producto_id'],'nombre_producto'=>$product['Producto']['name'], 'user_id'=>$venta['ProductoUser']['user_id'], 'nombre_user'=>$user['User']['first_name'].' '.$user['User']['last_name'], 'cantidad'=>$venta['ProductoUser']['cantidad'],'estado'=>$venta['ProductoUser']['estado'], 'created'=>$venta['ProductoUser']['created'], 'total'=>$total));
		}

		if($forma == 0){
			$this->set('ventas_tyd',$tyd);
			$this->set('pagina',0);
		}else{
			$this->set('ventas_mp',$tyd);
			$this->set('pagina',1);
		}
		$this->render('index');
	}


	public function filterAprobado($forma = null){

		if($forma == 0){
			$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'0','estado'=>'2')));
		}else{
			$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'1','estado'=>'2')));
		}
		
		$tyd = array();

		foreach ($ventas_tyd as $venta) {
			$user = $this->User->findById($venta['ProductoUser']['user_id']);
			$product = $this->Producto->findById($venta['ProductoUser']['producto_id']);
			$total = $product['Producto']['precio'] * $venta['ProductoUser']['cantidad'];
			array_push($tyd, array('id'=>$venta['ProductoUser']['id'], 'producto_id'=>$venta['ProductoUser']['producto_id'],'nombre_producto'=>$product['Producto']['name'], 'user_id'=>$venta['ProductoUser']['user_id'], 'nombre_user'=>$user['User']['first_name'].' '.$user['User']['last_name'], 'cantidad'=>$venta['ProductoUser']['cantidad'],'estado'=>$venta['ProductoUser']['estado'], 'created'=>$venta['ProductoUser']['created'], 'total'=>$total));
		}


		
		if($forma == 0){
			$this->set('ventas_tyd',$tyd);
			$this->set('pagina',0);
		}else{
			$this->set('ventas_mp',$tyd);
			$this->set('pagina',1);
		}
		$this->render('index');
	}

	public function filterEnviado($forma = null){

		if($forma == 0){
			$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'0','estado'=>'3')));
		}else{
			$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'1','estado'=>'3')));
		}
		
		$tyd = array();

		foreach ($ventas_tyd as $venta) {
			$user = $this->User->findById($venta['ProductoUser']['user_id']);
			$product = $this->Producto->findById($venta['ProductoUser']['producto_id']);
			$total = $product['Producto']['precio'] * $venta['ProductoUser']['cantidad'];
			array_push($tyd, array('id'=>$venta['ProductoUser']['id'], 'producto_id'=>$venta['ProductoUser']['producto_id'],'nombre_producto'=>$product['Producto']['name'], 'user_id'=>$venta['ProductoUser']['user_id'], 'nombre_user'=>$user['User']['first_name'].' '.$user['User']['last_name'], 'cantidad'=>$venta['ProductoUser']['cantidad'],'estado'=>$venta['ProductoUser']['estado'], 'created'=>$venta['ProductoUser']['created'], 'total'=>$total));
		}


		
		if($forma == 0){
			$this->set('ventas_tyd',$tyd);
			$this->set('pagina',0);
		}else{
			$this->set('ventas_mp',$tyd);
			$this->set('pagina',1);
		}
		$this->render('index');
	}
	public function filterRechazado($forma = null){

		if($forma == 0){
			$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'0','estado'=>'4')));
		}else{
			$ventas_tyd = $this->ProductoUser->find('all', array('conditions'=>array('forma'=>'1','estado'=>'4')));
		}
		
		$tyd = array();

		foreach ($ventas_tyd as $venta) {
			$user = $this->User->findById($venta['ProductoUser']['user_id']);
			$product = $this->Producto->findById($venta['ProductoUser']['producto_id']);
			$total = $product['Producto']['precio'] * $venta['ProductoUser']['cantidad'];
			array_push($tyd, array('id'=>$venta['ProductoUser']['id'], 'producto_id'=>$venta['ProductoUser']['producto_id'],'nombre_producto'=>$product['Producto']['name'], 'user_id'=>$venta['ProductoUser']['user_id'], 'nombre_user'=>$user['User']['first_name'].' '.$user['User']['last_name'], 'cantidad'=>$venta['ProductoUser']['cantidad'],'estado'=>$venta['ProductoUser']['estado'], 'created'=>$venta['ProductoUser']['created'], 'total'=>$total));
		}


		
		if($forma == 0){
			$this->set('ventas_tyd',$tyd);
			$this->set('pagina',0);
		}else{
			$this->set('ventas_mp',$tyd);
			$this->set('pagina',1);
		}
		$this->render('index');
	}


	public function aprobar($id = null) {
		$this->ProductoUser->id = $id;
		// $this->request->allowMethod('post', 'aprobar');
		if ($this->ProductoUser->saveField('estado', 2)) {

			$pedido = $this->ProductoUser->findById($id);
			$user = $this->User->findById($pedido['ProductoUser']['user_id']);

			$from = 'contacto@pikos.com.ve';
			$to = array($user['User']['email']);
			$subject=  "PIKOS: Su pedido ha sido aprobado";
			$mensaje = "Felicidades, Pikos ha confirmado su pago para el pedido con ID: ".$id.", en las próximas 12 horas el departamento de ventas de Pikos se comunicará con usted para coordinar el envío del pedido.<br><br>Gracias por confiar en nosotros,<br><br><br><b>Pikos, lencería combinable.</b>";
			$this->__enviar_correo($from, $to, $subject, $mensaje);


			$cantidad = $pedido['ProductoUser']['cantidad'];
			$medida = $this->Medida->findById($pedido['ProductoUser']['medida_id']);
			$inventario = $medida['Medida']['cantidad'];
			$inventario = $inventario - $cantidad;
			$this->Medida->id = $medida['Medida']['id'];
			$this->Medida->saveField('cantidad', $inventario);

			$this->Session->setFlash(__('El pedido ha sido aprobado.'));

		} else {
			$this->Session->setFlash(__('Intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function rechazar($id = null) {
		$this->ProductoUser->id = $id;
		// $this->request->allowMethod('post', 'aprobar');
		if ($this->ProductoUser->saveField('estado', 4)) {

			$pedido = $this->ProductoUser->findById($id);
			$user = $this->User->findById($pedido['ProductoUser']['user_id']);
			
			$from = 'contacto@pikos.com.ve';
			$to = array($user['User']['email']);
			$subject=  "PIKOS: Su pedido ha sido rechazado";
			$mensaje = "Pikos ha rechazado su pago para el pedido con ID: ".$id.", el departamento de ventas se comunicará con usted para informarle del problema.<br><br>Gracias por confiar en nosotros,<br><br><br><b>Pikos, lencería combinable.</b>";
			$this->__enviar_correo($from, $to, $subject, $mensaje);

			$this->Session->setFlash(__('El pedido ha sido rechazado.'));
		} else {
			$this->Session->setFlash(__('Intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function enviar($id = null) {
		$this->ProductoUser->id = $id;
		// $this->request->allowMethod('post', 'aprobar');
		if ($this->ProductoUser->saveField('estado', 3)) {

			$pedido = $this->ProductoUser->findById($id);
			$user = $this->User->findById($pedido['ProductoUser']['user_id']);
			
			$from = 'contacto@pikos.com.ve';
			$to = array($user['User']['email']);
			$subject=  "PIKOS: Su pedido ha sido enviado";
			$mensaje = "Felicidades, Pikos ha enviado su pedido con ID: ".$id." a la dirección acordada. Disfrutelo!<br><br>Gracias por confiar en nosotros,<br><br><br><b>Pikos, lencería combinable.</b>";
			$this->__enviar_correo($from, $to, $subject, $mensaje);

			$this->Session->setFlash(__('El pedido ha sido enviado.'));
			//envia correo para indicar que el pedido fue enviado
		} else {
			$this->Session->setFlash(__('Intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}




	function __enviar_correo($from, $to, $subject, $contenido){
		
		
		$Email = new CakeEmail();
		$Email->config('_temp')
		->to($to)
		->subject($subject)
		->from($from)
		->template('default')
		->emailFormat('html')
		->send($contenido);
	}
}
