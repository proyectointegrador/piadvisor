<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres 
 *
 * Descripción: Esta es la vista de administración
 * 				para editar areas.
 */

?>
<div class="areas form">
<?php echo $this->Form->create('Area'); ?>
	<fieldset>
		<legend><?php echo __('Editar Area'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Nombre'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Lista Areas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
	</ul>
</div>
