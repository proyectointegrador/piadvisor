<div class="disponibilidades form">
<?php echo $this->Form->create('Disponibilidad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Disponibilidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Disponibilidad.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Disponibilidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Disponibilidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Universidades'), array('controller' => 'universidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Universidad'), array('controller' => 'universidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
