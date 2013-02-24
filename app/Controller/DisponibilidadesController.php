<?php
App::uses('AppController', 'Controller');
/**
 * Disponibilidades Controller
 *
 * @property Disponibilidad $Disponibilidad
 */
class DisponibilidadesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Disponibilidad->recursive = 0;
		$this->set('disponibilidades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Disponibilidad->exists($id)) {
			throw new NotFoundException(__('Invalid disponibilidad'));
		}
		$options = array('conditions' => array('Disponibilidad.' . $this->Disponibilidad->primaryKey => $id));
		$this->set('disponibilidad', $this->Disponibilidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Disponibilidad->create();
			if ($this->Disponibilidad->save($this->request->data)) {
				$this->Session->setFlash(__('The disponibilidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disponibilidad could not be saved. Please, try again.'));
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
		if (!$this->Disponibilidad->exists($id)) {
			throw new NotFoundException(__('Invalid disponibilidad'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Disponibilidad->save($this->request->data)) {
				$this->Session->setFlash(__('The disponibilidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disponibilidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Disponibilidad.' . $this->Disponibilidad->primaryKey => $id));
			$this->request->data = $this->Disponibilidad->find('first', $options);
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
		$this->Disponibilidad->id = $id;
		if (!$this->Disponibilidad->exists()) {
			throw new NotFoundException(__('Invalid disponibilidad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Disponibilidad->delete()) {
			$this->Session->setFlash(__('Disponibilidad deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disponibilidad was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
