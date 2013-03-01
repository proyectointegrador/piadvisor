<div class="universidades form">
<?php echo $this->Form->create('Universidad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Universidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('name');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('calendario');
		echo $this->Form->input('disponibilidad_id');
		echo $this->Form->input('demanda_id');
		echo $this->Form->input('website');
		echo $this->Form->input('user_id');
		echo $this->Form->input('pais_id');
		echo $this->Form->input('Carrera');
		echo $this->Form->input('Requisito');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Universidad.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Universidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Universidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Disponibilidades'), array('controller' => 'disponibilidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disponibilidad'), array('controller' => 'disponibilidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Demandas'), array('controller' => 'demandas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Demanda'), array('controller' => 'demandas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises'), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais'), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('controller' => 'carreras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requisitos'), array('controller' => 'requisitos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requisito'), array('controller' => 'requisitos', 'action' => 'add')); ?> </li>
	</ul>
</div>
