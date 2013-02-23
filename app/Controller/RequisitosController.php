<?php
App::uses('AppController', 'Controller');
/**
 * Requisitos Controller
 *
 * @property Requisito $Requisito
 */
class RequisitosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Requisito->recursive = 0;
		$this->set('requisitos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Requisito->exists($id)) {
			throw new NotFoundException(__('Invalid requisito'));
		}
		$options = array('conditions' => array('Requisito.' . $this->Requisito->primaryKey => $id));
		$this->set('requisito', $this->Requisito->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Requisito->create();
			if ($this->Requisito->save($this->request->data)) {
				$this->Session->setFlash(__('The requisito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requisito could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Requisito->Categorium->find('list');
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
		if (!$this->Requisito->exists($id)) {
			throw new NotFoundException(__('Invalid requisito'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Requisito->save($this->request->data)) {
				$this->Session->setFlash(__('The requisito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The requisito could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Requisito.' . $this->Requisito->primaryKey => $id));
			$this->request->data = $this->Requisito->find('first', $options);
		}
		$categorias = $this->Requisito->Categorium->find('list');
		$this->set(compact('categorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Requisito->id = $id;
		if (!$this->Requisito->exists()) {
			throw new NotFoundException(__('Invalid requisito'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Requisito->delete()) {
			$this->Session->setFlash(__('Requisito deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Requisito was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
