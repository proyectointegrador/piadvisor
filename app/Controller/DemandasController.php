<?php
App::uses('AppController', 'Controller');
/**
 * Demandas Controller
 *
 * @property Demanda $Demanda
 */
class DemandasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Demanda->recursive = 0;
		$this->set('demandas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Demanda->exists($id)) {
			throw new NotFoundException(__('Invalid demanda'));
		}
		$options = array('conditions' => array('Demanda.' . $this->Demanda->primaryKey => $id));
		$this->set('demanda', $this->Demanda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Demanda->create();
			if ($this->Demanda->save($this->request->data)) {
				$this->Session->setFlash(__('The demanda has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The demanda could not be saved. Please, try again.'));
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
		if (!$this->Demanda->exists($id)) {
			throw new NotFoundException(__('Invalid demanda'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Demanda->save($this->request->data)) {
				$this->Session->setFlash(__('The demanda has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The demanda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Demanda.' . $this->Demanda->primaryKey => $id));
			$this->request->data = $this->Demanda->find('first', $options);
		}
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
		$this->Demanda->id = $id;
		if (!$this->Demanda->exists()) {
			throw new NotFoundException(__('Invalid demanda'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Demanda->delete()) {
			$this->Session->setFlash(__('Demanda deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Demanda was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
