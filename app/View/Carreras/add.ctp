<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres 
 *
 * Descripción: Esta es la vista de administración
 * 				para agregar carreras.
 */

?>
<div class="carreras form">
<?php echo $this->Form->create('Carrera'); ?>
	<fieldset>
		<legend><?php echo __('Nueva Carrera'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Carrera (Siglas)'));
		echo $this->Form->input('name2',array('label'=>'Nombre'));
		echo $this->Form->input('area_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Carreras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
	</ul>
</div>
