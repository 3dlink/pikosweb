<?php
App::uses('AppController', 'Controller');
/**
 * Subcategorias Controller
 *
 * @property Subcategoria $Subcategoria
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SubcategoriasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subcategoria->recursive = 0;
		$this->set('subcategorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subcategoria->exists($id)) {
			throw new NotFoundException(__('Invalid subcategoria'));
		}
		$options = array('conditions' => array('Subcategoria.' . $this->Subcategoria->primaryKey => $id));
		$this->set('subcategoria', $this->Subcategoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subcategoria->create();
			debug($this->request->data);die;
			if ($this->Subcategoria->saveAll($this->request->data)) {
				$this->Session->setFlash(__('Subcategoria guardada!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcategoria could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Subcategoria->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Subcategoria->exists($id)) {
			throw new NotFoundException(__('Invalid subcategoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subcategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The subcategoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcategoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subcategoria.' . $this->Subcategoria->primaryKey => $id));
			$this->request->data = $this->Subcategoria->find('first', $options);
		}
		$categorias = $this->Subcategoria->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Subcategoria->id = $id;
		if (!$this->Subcategoria->exists()) {
			throw new NotFoundException(__('Invalid subcategoria'));
		}
		$this->request->allowMethod('post', 'delete');
		$this->Subcategoria->delete();
		return $this->redirect(array('action' => 'index'));
	}
}
