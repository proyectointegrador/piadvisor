<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres
 *
 * Descripción: Controlador de la parte pública de la aplicación.
 */

App::uses('AppController', 'Controller');


/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Universidad','Carrera', 'Pais');

	

	var $helpers = array('Js', 'Html');
	var $components = array('RequestHandler');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	/*public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}*/

	/**
 * home method
 *
 * @return void
 */
	public function home() {
		
		$this->Carrera->recursive = 0;
		$carreras = $this->Carrera->find('list');
		$paises = $this->Pais->find('list');
		$this->set(compact('carreras','paises'));
		$this->set('title_for_layout', 'PIAdvisor');
	}

		/**
 * listado method
 *
 * @return void
 */
	public function listado_universidades() {
		if ($this->request->is('post')) {
			$datos = $this->request->data;
			debug($datos);


			$continentes = Configure::read('Continentes');
			
			/** Generacion de query de filtrado */
			$pais = $datos['Page']['pais_id'];
			$continente = $datos['Page']['continente_id'];
			$carrera =  $datos['Page']['carrera_id'];
			$joins = array();
			$condiciones = array();
			//Condiciones para el query
			if($pais != ''){
				$condiciones['pais_id']=$pais;
			}
			if($continente != ''){
				$condiciones['Pais.continente']=$continentes[$continente];
			}
			if($carrera != ''){
				$joins = array ( 
					array('table' => 'universidades_carreras',
	                'alias' => 'universidadcarrera',
	                'type' => 'INNER',
	                'conditions' => array(
	                    'universidadcarrera.carrera_id' => $carrera,
	                    'universidadcarrera.universidad_id = Universidad.id'
	                )
					)
					);
			}
		
			$this->Universidad->recursive = 0;
			$universidades = $this->Universidad->find('all',array
			('conditions'=>$condiciones,
			'fields'=>array('Universidad.codigo','Universidad.name','Universidad.idioma','Universidad.id'),
			'joins' => $joins,
			'group' => 'Universidad.id'
				));
				$this->set(compact('universidades'));

			
		}
			
		//Query de paises y carreras
		$this->Carrera->recursive = 0;
		$carreras = $this->Carrera->find('list');
		$paises = $this->Pais->find('list');
		$this->set(compact('carreras','paises'));
		$this->set('title_for_layout', 'PIAdvisor');

				
	}

	/**
	 * ver_universidad method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function ver_universidad($id = null) {
		if (!$this->Universidad->exists($id)) {
			throw new NotFoundException(__('Invalid universidad'));
		}
		$this->Universidad->recursive = 2;
		$options = array('conditions' => array('Universidad.' . $this->Universidad->primaryKey => $id));
		$this->set('universidad', $this->Universidad->find('first', $options));
		
	}
	/*
	AJAX
	*/
	/* Funcion que maneja la peticion ajax de os paise segun el continente
	 * Seleccionado.
	 *
	 * @return void
	 */
	public function paisajax(){
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if($this->RequestHandler->isAjax()){
				$continentes = Configure::read('Continentes');

				$continente_id = $this->request->data['Page']['continente_id'];
				$this->Pais->recursive= -1;
				$paises = $this->Pais->find('list',array(
					'conditions'=>array('continente'=>$continentes[$continente_id])));
				$this->set(compact('paises'));
				$this->render('paisajax', 'ajax');
			}
		}
		
	}
	/* Funcion que maneja la peticion ajax de busqueda redifinida.
	 *
	 * @return void
	 */
	public function listadoajax(){
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if($this->RequestHandler->isAjax()){
				$datos = $this->request->data;
				debug($datos);
				$continentes = Configure::read('Continentes');
			
			/** Generacion de query de filtrado */
			$pais = $datos['Page']['pais_id'];
			$continente = $datos['Page']['continente_id'];
			$carrera =  $datos['Page']['carrera_id'];
			$joins = array();
			$condiciones = array();
			//Condiciones para el query
			if($pais != ''){
				$condiciones['pais_id']=$pais;
			}
			if($continente != ''){
				$condiciones['Pais.continente']=$continentes[$continente];
			}
			if($carrera != ''){
				$joins = array ( 
					array('table' => 'universidades_carreras',
	                'alias' => 'universidadcarrera',
	                'type' => 'INNER',
	                'conditions' => array(
	                    'universidadcarrera.carrera_id' => $carrera,
	                    'universidadcarrera.universidad_id = Universidad.id'
	                )
					)
					);
			}
		
			$this->Universidad->recursive = 0;
			$universidades = $this->Universidad->find('all',array
			('conditions'=>$condiciones,
			'fields'=>array('Universidad.codigo','Universidad.name','Universidad.idioma','Universidad.id'),
			'joins' => $joins,
			'group' => 'Universidad.id'
				));
				$this->set(compact('universidades'));

			
				$this->render('listadoajax', 'ajax');
			}
		}
		
	}
}
