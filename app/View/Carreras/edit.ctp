<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres
 *
 * Descripción: Esta es la vista de administración
 * 				para editar Carreras.
 */

?>
<div class="carreras form">
<?php echo $this->Form->create('Carrera'); ?>
	<fieldset>
		<legend><?php echo __('Editar Carrera'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Siglas'));
		echo $this->Form->input('name2',array('label'=>'Nombre'));
		echo $this->Form->input('area_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ligas'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Carreras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
	</ul>
</div>
