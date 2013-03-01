<?php
App::uses('AppController', 'Controller');
/**
 * Universidades Controller
 *
 * @property Universidad $Universidad
 */
class UniversidadesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Universidad->recursive = 0;
		$this->set('universidades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Universidad->exists($id)) {
			throw new NotFoundException(__('Invalid universidad'));
		}
		$options = array('conditions' => array('Universidad.' . $this->Universidad->primaryKey => $id));
		$this->set('universidad', $this->Universidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Universidad->create();
			if ($this->Universidad->save($this->request->data)) {
				$this->Session->setFlash(__('The universidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The universidad could not be saved. Please, try again.'));
			}
		}
		$disponibilidades = $this->Universidad->Disponibilidad->find('list');
		$demandas = $this->Universidad->Demanda->find('list');
		$users = $this->Universidad->User->find('list');
		$paises = $this->Universidad->Pais->find('list');
		$carreras = $this->Universidad->Carrera->find('list');
		$requisitos = $this->Universidad->Requisito->find('list');
		$this->set(compact('disponibilidades', 'demandas', 'users', 'paises', 'carreras', 'requisitos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Universidad->exists($id)) {
			throw new NotFoundException(__('Invalid universidad'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Universidad->save($this->request->data)) {
				$this->Session->setFlash(__('The universidad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The universidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Universidad.' . $this->Universidad->primaryKey => $id));
			$this->request->data = $this->Universidad->find('first', $options);
		}
		$disponibilidades = $this->Universidad->Disponibilidad->find('list');
		$demandas = $this->Universidad->Demanda->find('list');
		$users = $this->Universidad->User->find('list');
		$paises = $this->Universidad->Pais->find('list');
		$carreras = $this->Universidad->Carrera->find('list');
		$requisitos = $this->Universidad->Requisito->find('list');
		$this->set(compact('disponibilidades', 'demandas', 'users', 'paises', 'carreras', 'requisitos'));
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
		$this->Universidad->id = $id;
		if (!$this->Universidad->exists()) {
			throw new NotFoundException(__('Invalid universidad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Universidad->delete()) {
			$this->Session->setFlash(__('Universidad deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Universidad was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
