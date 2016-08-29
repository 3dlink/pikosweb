<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConsejosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $uses = array('Categoria','Subcategoria','Usermgmt.User','Producto','Estado','Consejo');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Paginator->settings = array(
			'order' => array('Consejo.created' => 'desc'),
			'limit' => 10
		);
		
		$consejos = $this->Paginator->paginate('Consejo');
		$this->set('consejos', $consejos);
		$this->set('categorias', $this->Categoria->find('all'));
		$this->set('estados', $this->Estado->find('list'));
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->layout='pikos';
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('estados', $this->Estado->find('list'));
		$this->set('categorias', $this->Categoria->find('all'));
		$options = array('conditions' => array('Consejo.' . $this->Consejo->primaryKey => $id));
		$this->set('consejo', $this->Consejo->find('first', $options));
		$this->set('productos', $this->Producto->find('all',array('limit'=>2)));
		$this->layout='pikos';		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Consejo->create();
			if ($this->Consejo->save($this->request->data)) {
				$this->Session->setFlash(__('El consejo ha sido guardado.'));
				return $this->redirect(array('action' => 'todos'));
			} else {
				$this->Session->setFlash(__('Consejo guardado!'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Consejo->exists($id)) {
			throw new NotFoundException(__('Invalid Consejo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Consejo->save($this->request->data)) {
				$this->Session->setFlash(__('El consejo ha sido guardado'));
				return $this->redirect(array('action' => 'todos'));
			} else {
				$this->Session->setFlash(__('The Consejo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Consejo.' . $this->Consejo->primaryKey => $id));
			$this->request->data = $this->Consejo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Consejo->id = $id;
		if (!$this->Consejo->exists()) {
			throw new NotFoundException(__('Consejo inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Consejo->delete()) {
			$this->Session->setFlash(__('El Consejo ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('El Consejo no ha sido eliminado. Intente, nuevamente.'));
		}
		return $this->redirect(array('action' => 'todos'));
	}



	public function todos() {
		$consejos = $this->Consejo->find('all');
		$this->set(compact('consejos'));
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
							false,
							false 
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










}
