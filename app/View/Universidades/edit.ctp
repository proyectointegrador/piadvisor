<div class="universidades form">
<?php echo $this->Form->create('Universidad'); ?>
	<fieldset>
		<legend><?php echo __('Editar Universidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('name',array('label' => 'Nombre'));
		echo $this->Form->input('ciudad');
		echo $this->Form->input('calendario');
		echo $this->Form->input('disponibilidad_id');
		echo $this->Form->input('demanda_id');
		echo $this->Form->input('website',array('label' => 'Pagina Web'));
		echo $this->Form->input('user_id',array('label' => 'Usuario'));
		echo $this->Form->input('pais_id');

		
		echo $this->Form->input('Carrera',array('label'=>'Carreras','multiple'=>'checkbox','style' => '','class'=>'iaminline'));

		
		echo $this->Form->input('Requisito');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
<<<<<<< HEAD
	<h3><?php echo __('Ligas'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Universidades'), array('action' => 'index')); ?></li>
		
=======
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Universidad.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Universidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Universidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Disponibilidades'), array('controller' => 'disponibilidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Disponibilidad'), array('controller' => 'disponibilidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Demandas'), array('controller' => 'demandas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Demanda'), array('controller' => 'demandas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Paises'), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Pais'), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Requisitos'), array('controller' => 'requisitos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Requisito'), array('controller' => 'requisitos', 'action' => 'add')); ?> </li>
>>>>>>> idioma y etiquetas corregidas 
	</ul>
</div>
