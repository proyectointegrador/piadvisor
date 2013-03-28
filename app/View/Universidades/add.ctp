<div class="universidades form">
<?php echo $this->Form->create('Universidad'); ?>
	<fieldset>
		<legend><?php echo __('Add Universidad'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('name');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('calendario');
		echo $this->Form->input('disponibilidad_id');
		echo $this->Form->input('demanda_id');
		echo $this->Form->input('website');
		echo $this->Form->input('user_id');
		echo $this->Form->input('pais_id');

		
			
		echo $this->Form->input('Carrera',array('label'=>'Carreras','type'=>'checkbox','multiple'=>'checkbox','style' => '','class'=>'iaminline'));
		
		echo $this->Form->input('Requisito');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ligas'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Universidades'), array('action' => 'index')); ?></li>
	</ul>
</div>
