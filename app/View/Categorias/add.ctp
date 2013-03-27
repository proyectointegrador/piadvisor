<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres
 *
 * Descripción: Esta es la vista de administración
 * 				para agregar una Categoría.
 */

?>
<div class="categorias form">
<?php echo $this->Form->create('Categoria'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ligas'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Requisitos'), array('controller' => 'requisitos', 'action' => 'index')); ?> </li>
	</ul>
</div>
