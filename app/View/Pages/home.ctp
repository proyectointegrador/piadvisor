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

<?php
	echo $this->Form->input('carrera_id',array('empty'=>'----'));
	echo $this->Form->input('continente_id',array('options' => $continentes,'empty'=>'----'));
	echo $this->Form->input('pais_id',array('empty'=>'----'));
  ?>
<?php echo $this->Form->end(__('Submit')); ?>