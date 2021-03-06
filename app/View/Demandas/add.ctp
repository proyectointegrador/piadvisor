<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres 
 *
 * Descripción: Esta es la vista de administración
 * 				para agregar demandas.
 */

?>
<div class="demandas form">
<?php echo $this->Form->create('Demanda'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Demanda'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
		echo $this->Form->input('descripcion',array('label'=>'Descripción'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Demandas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Universidades'), array('controller' => 'universidades', 'action' => 'index')); ?> </li>
	</ul>
</div>
