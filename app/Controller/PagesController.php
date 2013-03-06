<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
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

			$continentes = array (
			'1' => 'África',
			'2' => 'América',
			'3' => 'Asia',
			'4' => 'Europa',
			'5' => 'Oceania'
			);
			
			/** Generacion de query de filtrado */
			$pais = $datos['Page']['pais_id'];
			$continente = $datos['Page']['continente_id'];
			$carrera =  $datos['Page']['carrera_id'];
			$joins = array();
			$condiciones = array();
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
			'fields'=>array('Universidad.codigo','Universidad.name','Universidad.id'),
			'joins' => $joins,
			'group' => 'Universidad.id'
				));
				$this->set(compact('universidades'));
			}
		
		
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
		$hola ="hola";
		debug($hola);
		exit();
		if ($this->request->is('post') || $this->request->is('put')) {
			
			if($this->RequestHandler->isAjax()){
				$continentes = array (
					'1' => 'África',
					'2' => 'América',
					'3' => 'Asia',
					'4' => 'Europa',
					'5' => 'Oceania'
					);
				$continente_id = $this->request->data['Page']['continente_id'];
				$this->Pais->recursive= -1;
				$paises = $this->Pais->find('list',array(
					'conditions'=>array('continente'=>$continentes[$continente_id])));
				$this->set(compact('paises'));
				$this->render('paisajax', 'ajax');
			}
		}
		
	}
}
