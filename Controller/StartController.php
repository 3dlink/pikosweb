<?php
// require_once('lib/mercadopago.php');

// $mp = new MP ("100639272584397", "4E4bpifEGAluv9WUVZXy7Ck5wDGCtnKe");
App::uses('AppController', 'Controller','CakeEmail', 'Network/Email');

class StartController extends AppController {
	public $components = array('Paginator', 'Session');
	public $uses = array('Categoria', 'Estado','Usermgmt.User','Producto','ProductoUser');

	public function index() {
		$productos = $this->Producto->find('all', array('conditions'=>array('destacado'=>1)));
		$this->User->recursive = 2;
		$this->set('user', $this->User->findById($this->UserAuth->getUserId()));
		$this->set('estados', $this->Estado->find('list'));
		$this->set('categorias', $this->Categoria->find('all'));
		$this->set('productos', $productos);
		$this->layout='pikos';
	}

	public function carrito($accion = null,$id=null) {
		if($accion != null){
			if($accion == 1){
				$ids = split('d', $id);
				foreach ($ids as $i) {
					$this->ProductoUser->id = $i;
					$this->ProductoUser->saveField('estado', 1);
					$this->ProductoUser->saveField('forma', 1);
				}
				$this->__aprobar($ids);
			}else{
				$ids = split('d', $id);
				$this->__rechazar($ids);
				foreach ($ids as $i) {
					$this->ProductoUser->id = $i;
					$this->ProductoUser->saveField('estado', 4);
					$this->ProductoUser->saveField('forma', 1);
				}
				$this->__rechazar($ids);
			}
		}

		$this->set('estados', $this->Estado->find('list'));
		$this->set('categorias', $this->Categoria->find('all'));
		// $user = $this->User->findById($this->UserAuth->getUserId());

		$user = $this->User->findById($this->UserAuth->getUserId());
		$this->set('user',$user);
		$this->layout='pikos';
	}

	private function __rechazar($ids = null) {
			$user = $this->User->findById($this->UserAuth->getUserId());
			$ids = implode(', ', $ids);
			
			$from = 'contacto@pikos.com.ve';
			$to = array($user['User']['email']);
			$subject=  "PIKOS: Su pedido ha sido rechazado";
			$mensaje = "Pikos ha rechazado su pago para el pedido con ID: ".$ids.", el departamento de ventas se comunicará con usted para informarle del problema.<br><br>Gracias por confiar en nosotros,<br><br><br><b>Pikos, lencería combinable</b>";
			$this->__enviar_correo($from, $to, $subject, $mensaje);
		

		return $this->redirect(array('action' => 'carrito'));
	}

	private function __aprobar($ids = null) {
			$user = $this->User->findById($this->UserAuth->getUserId());
			
			$from = 'contacto@pikos.com.ve';
			$to = array($user['User']['email']);
			$subject=  "PIKOS: Felicidades, has hecho una compra!";

			$mensaje2 = "";
			$mensaje = "Has realizado una compra de: \n\n\n";
			$super_total=0;
			foreach ($ids as $key => $value) {
				$produser = $this->ProductoUser->findById($value);
				$cantidad = $produser['ProductoUser']['cantidad'];
				$product = $this->Producto->findById($produser['ProductoUser']['producto_id']);
				$nombre = $product['Producto']['name'];
				$precio = $produser['ProductoUser']['precio'];
				$total = $precio * $cantidad;
				$super_total += $total;
				$mensaje = $mensaje."<b>ID Pedido:</b> ".$produser['ProductoUser']['id']."<br><b>Producto:</b> ".$nombre."<br><b>Cantidad:</b> ".$cantidad."<br><b>Precio:</b> ".$precio." BsF.<br><b>TOTAL:</b> ".$total." BsF.<br><br>";
				$mensaje2 = $mensaje2."<b>ID Pedido:</b> ".$produser['ProductoUser']['id']."<br><b>Producto:</b> ".$nombre."<br><b>Cantidad:</b> ".$cantidad."<br><b>Precio:</b> ".$precio." BsF.<br><b>TOTAL:</b> ".$total." BsF.<br><br>";
			}

			$comision = $super_total*0.07;
			$total_mp = $comision+$super_total;

			$mensaje = $mensaje.
			"Para un <b>SUB - TOTAL</b> de ".$super_total." BsF + Comisión Mercadopago (".$comision.") = <b>TOTAL: ".$total_mp."</b>.<br>\n\n\n"
			."A continuación nuestro departamento de ventas se contactará con usted para hacer el envío del pedido.\n\n\n"
			."Gracias por confiar en nosotros.\n\n\n"
			."<b>Pikos, lencería combinable</b>";

			$this->__enviar_correo($from, $to, $subject, $mensaje);



			$from = 'contacto@pikos.com.ve';
			$to = array('diegobritop.9@gmail.com','contacto@pikos.com.ve');
			$subject=  "PIKOS: Nueva venta";
			$mensaje=
			"Has recibido una nueva compra de: \n\n\n"
			."<b>Nombre:</b> ".$user['User']['first_name'].' '.$user['User']['last_name']."<br>"
			."<b>Email:</b> ".$user['User']['email']."<br>"
			."<b>Teléfono:</b> ".$user['User']['phone']."<br>"
			."<b>Forma de pago: Mercadopago</b><br><br>"
			.$mensaje2
			."Para un <b>TOTAL</b> de ".$total_mp." BsF.<br>\n\n\n"
			."Recuerde contactar al comprador y comprobar el pago.";

			$this->__enviar_correo($from, $to, $subject, $mensaje);

		return $this->redirect(array('action' => 'carrito'));
	}

	public function perfil() {
		if (!$this->request -> isPut()) {
			$this->set('estados', $this->Estado->find('list'));
			$this->set('categorias', $this->Categoria->find('all'));
			$user = $this->User->findById($this->UserAuth->getUserId());
			$this->set('user',$user);
			$this->request->data = $user;
			$this->layout='pikos';
		}else{
			$this->User->save($this->request->data,false);
			$this->redirect('/perfil');
		}
	}

	public function contacto() {
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->set('estados', $this->Estado->find('list'));
		$this->set('categorias', $this->Categoria->find('all'));
		$this->layout='pikos';
	}

	public function deleteProducto($id = null){
		$this->autoRender = false;
		if($id!=null){
			$this->ProductoUser->id = $id;
			if ($this->ProductoUser->delete()) {
				return $this->redirect(array('action' => 'carrito'));
			}
		}
	}

	public function comoComprar() {
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->set('estados', $this->Estado->find('list'));
		$this->set('categorias', $this->Categoria->find('all'));
		$this->layout='pikos';
	}

	public function register(){
		$this->autoRender = false;
			if(isset($_POST['data'])){
				$usuario=$_POST['data'];

				$usuario['email_verified']=1;
				$usuario['active']=1;
				$salt=$this->UserAuth->makeSalt();
				$usuario['salt'] = $salt;
				$usuario['password'] = $this->UserAuth->makePassword($usuario['password'], $salt);
				$usuario['user_group_id'] = 2;
				$existe = $this->User->findByEmail($usuario['email']);

				if(empty($existe)){
					$this->User->save($usuario);
					return 1;
				}else{
					return 0;
				}
			}else{
				return 0;
			}
		}

	public function sendMailTrasnferencia(){
		$this->autoRender = false;
		if(isset($_POST['data'])){
			$data=$_POST['data'];

			$user = $this->User->findById($this->UserAuth->getUserId());
			foreach ($data as $key => $value) {
				if($value == 0)
					unset($data[$key]);
			}

			
			$from = 'contacto@pikos.com.ve';
			$to = array($user['User']['email']);
			$subject=  "PIKOS: Felicidades, has hecho una compra!";

			$mensaje = "Has realizado una compra de: \n\n\n";
			$mensaje2 = "";
			$super_total=0;
			foreach ($data as $key => $value) {
				$produser = $this->ProductoUser->findById($value);
				$cantidad = $produser['ProductoUser']['cantidad'];
				$product = $this->Producto->findById($produser['ProductoUser']['producto_id']);
				$nombre = $product['Producto']['name'];
				$precio = $produser['ProductoUser']['precio'];
				$medida = $produser['ProductoUser']['medida'];
				$total = $precio * $cantidad;
				$super_total += $total;
				$mensaje = $mensaje."<b>ID Pedido:</b> ".$produser['ProductoUser']['id']."<br><b>Producto:</b> ".$nombre."<br><b>Medida:</b> ".$medida."<br><b>Cantidad:</b> ".$cantidad."<br><b>Precio:</b> ".$precio." BsF.<br><b>TOTAL:</b> ".$total." BsF.<br><br>";
				$mensaje2 = $mensaje2."<b>ID Pedido:</b> ".$produser['ProductoUser']['id']."<br><b>Producto:</b> ".$nombre."<br><b>Medida:</b> ".$medida."<br><b>Cantidad:</b> ".$cantidad."<br><b>Precio:</b> ".$precio." BsF.<br><b>TOTAL:</b> ".$total." BsF.<br><br>";
				$this->ProductoUser->id = $value;
				$this->ProductoUser->saveField('estado', 1);
			}

			$mensaje = $mensaje.
			"Para un <b>TOTAL</b> de ".$super_total." BsF.<br>\n\n\n"
			."A continuación encontrará nuestras cuentas bancarias en las cuales podrá usted depositar o transferir el monto de su pedido:\n"
			."Nombre de la Empresa: Pikos telas y colores, C.A.\n"
			."Rif: J-40323877-4\n"
			."Banco Nacional de Crédito, Cuenta Corriente #01910061802161029042\n"
			."Una vez realizado el depósito o la transferencia, por favor responda este correo adjuntando el comprobante de pago o número de la transferencia para que su pedido sea procesado.\n"
			."En un lapso máximo de 12 horas, nuestro departamento de ventas lo llamará a su teléfono: xxxxxxx (actualícelo a través de este correo, si fuera necesario) para coordinar el envío del pedido mediante la forma de su preferencia.\n"
			."Gracias por confiar en nosotros.\n\n\n"
			."<b>Pikos, lencería combinable</b>";

			$this->__enviar_correo($from, $to, $subject, $mensaje);



			$from = 'contacto@pikos.com.ve';
			$to = array('diegobritop.9@gmail.com','contacto@pikos.com.ve');
			$subject=  "PIKOS: Nueva venta";
			$mensaje=
			"Has recibido una nueva compra de: \n\n\n"
			."<b>Nombre:</b> ".$user['User']['first_name'].' '.$user['User']['last_name']."<br>"
			."<b>Email:</b> ".$user['User']['email']."<br>"
			."<b>Teléfono:</b> ".$user['User']['phone']."<br>"
			."<b>Forma de pago: Transferencia/Depósito</b><br><br>"
			.$mensaje2
			."Para un <b>TOTAL</b> de ".$super_total." BsF.<br>\n\n\n"
			."Recuerde contactar al comprador y comprobar el pago.";

			$this->__enviar_correo($from, $to, $subject, $mensaje);

			return json_encode(1);
		}
	
	}

	public function sendMail(){
		$this->autoRender = false;
		
		$from = 'contacto@pikos.com.ve';
		$to = array('diegobritop.9@gmail.com','contacto@pikos.com.ve');
		$subject=  "PIKOS: Tienes un nuevo contacto";
		//$content = $this->__armar_contenido($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['details']);
		//$this->__enviar_correo($from, $to, $subject, $content);
		$mensaje=
		"Has recibido un nuevo mensaje de: \n\n\n"
		."<b>Nombre:</b> ".$_REQUEST['name']."\n"
		."<b>Asunto:</b> ".$_REQUEST['asunto']."\n"
		."<b>Correo:</b> ".$from."\n"
		."<b>Teléfono:</b> ".$_REQUEST['tlf']."\n"
		."<b>Contenido:</b> ".$_REQUEST['cuestion']."\n";
		// mail($to,$subject,$mensaje,$from);
		$this->__enviar_correo($from, $to, $subject, $mensaje);
		return json_encode(1);
	
	}


	public function mercadopago(){
		$this->autoRender = false;
		$mp = new MP('100639272584397', '4E4bpifEGAluv9WUVZXy7Ck5wDGCtnKe');

		if(isset($_POST['data'])){
			$data=$_POST['data'];
			$preference_data["items"] = array();
			$string = "";

			foreach ($data as $key => $value) {
				$produser = $this->ProductoUser->findById($value);
				$cantidad = $produser['ProductoUser']['cantidad'];
				$string = $string.$produser['ProductoUser']['id'].'d';
				$product = $this->Producto->findById($produser['ProductoUser']['producto_id']);
				$total_mp = (double)$produser['ProductoUser']['precio']*0.07;
				$total_mp += (double)$produser['ProductoUser']['precio'];
				array_push($preference_data["items"], array(
																							"title" => $product['Producto']['name'],
																							"quantity" => (double)$cantidad,
																							"currency_id" => "VEF",
																							"unit_price" => $total_mp
																						));
			}

			$string = substr($string, 0, count($string)-2);

			$preference_data["back_urls"] = array("success"=> $_SERVER['HTTP_HOST'].$this->webroot.'carrito/1/'.$string, "pending"=>$_SERVER['HTTP_HOST'].$this->webroot.'carrito/1/'.$string, "failure"=> $_SERVER['HTTP_HOST'].$this->webroot.'carrito/2/'.$string);
			$preference_data["auto_return"]="approved";
		}

		$preference = $mp->create_preference($preference_data);

		return json_encode($preference['response']['init_point']);
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
	
	function __armar_contenido($name, $email, $observation){
	
		$nombre = $name;
	
		$observaciones = $observation;
	
		$content = "<table width='100%'>
		<tr>
		<td style='text-align: left; color: black; width: 60%;'>
		<h3>El siguiente usuario est&aacute; solicitando informaci&oacute;n de contacto:</h3>
		</td>
		</tr>
		<tr>
		<td style='text-align: left; color: black; width: 60%;'>
		<b>Datos de contacto:</b><br>
		Nombre : $nombre<br>
	
		Correo: $email<br>
		Problema: $observaciones <br>
		</td>
		</tr>
		<tr>
		<td colspan='2'>
		</td>
		</tr>
		<tr style='height: 20px;'></tr>
		<tr style='height: 50px;'></tr>
		</table>";
	
		return $content;
	
	}


	public function prueba() {
		$a =array(1);
		$a = implode(', ',$a);
		debug($a);
	}


}