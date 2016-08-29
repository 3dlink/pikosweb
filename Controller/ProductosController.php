<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProductosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $uses = array('Categoria','Usermgmt.User','Subcategoria','Producto','Estado','ProductoUser','Medida','Linea');

/**
 * index method
 *
 * @return void
 */
	public function index($filtro = 0) {
		$this->set('estados', $this->Estado->find('list'));
		$target = split('_', $filtro);

		$this->set('categoria', $this->Categoria->find('first', array('conditions'=>array('Categoria.id' => $target[0]))));
		if(count($target)==2){
			$subcat = $this->Subcategoria->find('first', array('conditions'=>array('Subcategoria.id' => $target[1])));
			if(empty($subcat['Linea'])){
				$this->set('subcategoria', $subcat);
				$this->set('productos', $this->Producto->find('all', array('conditions'=>array('Producto.categoria_id'=>$target[0],'Producto.subcategoria_id'=>$target[1]))));
			}else{
				$this->redirect('lineas/'.$subcat['Subcategoria']['id']);
			}
		}else if(count($target)==3){
			$subcat = $this->Subcategoria->findById($target[1]);
			$this->set('subcategoria', $subcat);
			$linea = $this->Linea->findById($target[2]);
			$this->set('linea', $linea);
			$this->set('productos', $this->Producto->find('all', array('conditions'=>array('Producto.categoria_id'=>$target[0],'Producto.subcategoria_id'=>$target[1],'Producto.linea_id'=>$target[2]))));
			
		}else{
			$this->set('productos', $this->Producto->find('all', array('conditions'=>array('Producto.categoria_id'=>$target[0]))));
		}
			
		$this->set('categorias', $this->Categoria->find('all'));
		$this->layout='pikos';
		$this->set('productos_', $this->Paginator->paginate());
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$medidas=$this->__getMedidas($id);
		$this->set('medidas', $medidas);
		$this->set('estados', $this->Estado->find('list'));
		$this->set('categorias', $this->Categoria->find('all'));
		// $this->set('categorias', $this->Categoria->find('all'));


		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->Producto->recursive = 1;
		$this->set('producto', $this->Producto->find('first', $options));
		$this->User->recursive = 1;
		$this->set('user', $this->User->findById($this->UserAuth->getUserId()));
		$this->layout='pikos';		
	}


	public function lineas($id = null) {
		$this->set('estados', $this->Estado->find('list'));
		$this->set('categorias', $this->Categoria->find('all'));
		$this->User->recursive = 1;
		$this->set('user', $this->User->findById($this->UserAuth->getUserId()));
		$this->layout='pikos';		

		$subcat = $this->Subcategoria->findById($id);
		$cat = $this->Categoria->findById($subcat['Subcategoria']['categoria_id']);
		$this->set('subcategoria',$subcat);
		$this->set('categoria',$cat);
	}

private function __getMedidas($id = null){
	$result=$this->Medida->find("all", array('conditions'=>array('Medida.producto_id'=>$id)));
	$medidas=array();
	$medidas[0]='Seleccione una medida';
	foreach ($result as $row) {
		$medidas[$row['Medida']['id']]=$row['Medida']['medida'];
	}
	return $medidas;
}


public function getLineas(){
	$this->autoRender=false;
	$option=$_GET['subcategoria_id'];
	// $this->Linea->recursive=0;
	$result=$this->Linea->find('all', array("order"=>"Linea.id",'conditions'=>array("Linea.subcategoria_id"=>$option)));
	$reporting=array();
	$reporting[0]='Seleccione una línea';
	foreach ($result as $row) {
		$reporting[$row['Linea']['id']]=$row['Linea']['nombre'];
	}
	return json_encode(array('lineas'=>$reporting));
}


private function getLinea($option){
	$result=$this->Linea->find('all', array("order"=>"Linea.id",'conditions'=>array("Linea.subcategoria_id"=>$option)));
	$reporting=array();
	$reporting[0]='Seleccione una línea';
	foreach ($result as $row) {
		$reporting[$row['Linea']['id']]=$row['Linea']['nombre'];
	}
	return $reporting;
}


public function getPrecios(){
		$this->autoRender = false;
		if(isset($_POST['data'])){
			$medida_id=$_POST['data'];
			$result=$this->Medida->findById($medida_id);

			return json_encode($result['Medida']);
		}
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->saveAll($this->request->data)) {
				$this->Session->setFlash(__('El producto ha sido guardado.'));
				return $this->redirect(array('action' => 'todos'));
			} else {
				$this->Session->setFlash(__('Producto guardado!'));
			}
		}
		$this->Categoria->recursive = -1;
		$categorias = $this->Categoria->find('list');
		$subcategorias = $this->Subcategoria->find('list');
		$lineas = $this->Linea->find('list');
		$this->set(compact('categorias','subcategorias','lineas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {

			if ($this->Producto->saveAll($this->request->data)) {
				$this->Session->setFlash(__('El producto ha sido guardado'));
				return $this->redirect(array('action' => 'todos'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$categorias = $this->Producto->Categoria->find('list');
		$subcategorias = $this->Subcategoria->find('list');
		$lineas = $this->getLinea($this->request->data['Producto']['subcategoria_id']);
		$this->set(compact('categorias','subcategorias','lineas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Producto inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('El producto ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El producto no ha sido eliminado. Intente, nuevamente.'));
		}
		return $this->redirect(array('action' => 'todos'));
	}



	public function todos() {
		$productos = $this->Producto->find('all');
		$this->set(compact('productos'));
	}


	public function agregaralcarrito() {
		$this->autoRender = false;
			if($this->ProductoUser->save(array('producto_id'=>$_REQUEST['id'],'user_id'=>$this->UserAuth->getUserId(),'medida_id'=>$_REQUEST['medida_id'],'medida'=>$_REQUEST['medida'],'cantidad'=>$_REQUEST['cantidad'],'precio'=>$_REQUEST['precio'],'created'=>date('Y-m-d H:i:s'))))
				return json_encode(1);
			else
				return json_encode(0);
	}	


	public function upload() {
		$this->autoRender = false;

		$time = strtotime ( "now" );
		$targetFolder = '../webroot/files/'; // Relative to the root
		if (! empty ( $_FILES )) {
			$tempFile = $_FILES ['file'] ['tmp_name'];
			$targetPath = $targetFolder;
			// Validate the file type
			$fileTypes = array (
					'jpg',
					'jpeg',
					'gif',
					'png',
					'JPG',
					'JPEG',
					'GIF',
					'PNG'
			); // File extensions
			$fileParts = pathinfo ( $_FILES ['file'] ['name'] );
			if (in_array ( $fileParts ['extension'], $fileTypes )) {
				$name = "img" . $time . $this->__randomStr ( 3 );
				$targetFile = rtrim ( $targetPath, '/' ) . '/' . $name . "." . $fileParts ['extension'];
				if (move_uploaded_file ( $tempFile, $targetFile )) {
					$namepath = $name . "." . $fileParts ['extension'];
					return json_encode ( array (
							1,
							$namepath 
					) );
				} else {
					return json_encode ( array (
							'Imagen no válida. Tamaño máximo 16 MB' 
					) );
				}
			} else {
				echo 'Imagen no valida';
			}
		}
	
	}

	function __randomStr($length) {
		$str = '';
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	
		$size = strlen ( $chars );
		for($i = 0; $i < $length; $i ++) {
			$str .= $chars [rand ( 0, $size - 1 )];
		}
	
		return $str;
	}


	public function sendQuestion(){
		$this->autoRender = false;
		$user = $this->User->findById($this->UserAuth->getUserId());

		$from = 'contacto@pikos.com.ve';
		$to = array('diegobritop.9@gmail.com','fannymigliore@gmail.com', 'raquelortiz2005@hotmail.com');
		$subject=  "PIKOS: Te han preguntado";
		//$content = $this->__armar_contenido($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['details']);
		//$this->__enviar_correo($from, $to, $subject, $content);
		$mensaje=
		"Has recibido una pregunta de: <br><br>\n"
		."<b>Nombre:</b> ".$user['User']['first_name'].' '.$user['User']['last_name']."\n"
		."<b>Correo:</b> ".$user['User']['email']."\n"
		."<b>Teléfono:</b> ".$user['User']['phone']."<br>\n"
		."<b>Artículo:</b> ".$_REQUEST['nombre']."\n"
		."<b>Categoría:</b> ".$_REQUEST['categoria']."\n"
		."<b>Subcategoría:</b> ".$_REQUEST['subcategoria']."<br><br>\n"
		."<b>PREGUNTA:</b> ".$_REQUEST['pregunta']."<br>\n<b>Recuerda responder rápidamente!</b>";
		// mail($to,$subject,$mensaje,$from);
		$this->__enviar_correo($from, $to, $subject, $mensaje);
		return json_encode(1);
	
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
