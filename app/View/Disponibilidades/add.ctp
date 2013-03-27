<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres
 *
 * Descripción: Esta es la vista de administración
 * 				para agregar Disponibilidades.
 */

?>
<div class="disponibilidades form">
<?php echo $this->Form->create('Disponibilidad'); ?>
	<fieldset>
		<legend><?php echo __('Agergar Disponibilidad'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('descripcion',array('label'=>'Descripción'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ligas'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Disponibilidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Universidades'), array('controller' => 'universidades', 'action' => 'index')); ?> </li>
	</ul>
</div>
