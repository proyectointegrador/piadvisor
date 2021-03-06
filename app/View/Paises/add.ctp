<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres 
 *
 * Descripción: Esta es la vista de administración
 * 				para agregar paises.
 */

$continentes = Configure::read('Continentes');

?>
<div class="paises form">
<?php echo $this->Form->create('Pais'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Pais'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('continente_id',array('options' => $continentes,'empty'=>'----'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Paises'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Universidades'), array('controller' => 'universidades', 'action' => 'index')); ?> </li>
	</ul>
</div>
