<?php

$continentes = array (
	'1' => 'África',
	'2' => 'América',
	'3' => 'Asia',
	'4' => 'Europa',
	'5' => 'Oceania'
	);

?>
<?php echo $this->Form->create('Page',array('action'=>'listado_universidades')); ?>





<div class="container">
</br>
      <div class="form-signin">
<?php
	echo $this->Form->input('carrera_id',array('empty'=>'----'));
	echo $this->Form->input('continente_id',array('options' => $continentes,'empty'=>'----'));
?>
<?php
	/*$this->Js->get('#PageContinenteId')->event('click', 'alert("whoa!");', false);

	$this->Js->get('#PageContinenteId')->event('change', $this->Js->request( 
				array('controller' => 'pages', 'action' => 'paisajax'), 
				array( 
				'update' => '#paisajax',
				'async' => true, 
				'dataExpression' => true, 
				'method' => 'post', 
				'data' => $this->Js->serializeForm(array('isForm' => true, 'inline' => true))
				) ) );*/
?>

<?php

	echo $this->Form->input('pais_id',array('empty'=>'----'));
  ?>




        <button class="btn btn-large btn-primary" type="submit">Buscar</button>


<?php echo $this->Form->end();
 ?>
      </div>

    </div> <!-- /container -->






