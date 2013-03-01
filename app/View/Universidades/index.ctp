<div class="universidades index">
	<h2><?php echo __('Universidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th><?php echo $this->Paginator->sort('calendario'); ?></th>
			<th><?php echo $this->Paginator->sort('disponibilidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('demanda_id'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pais_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($universidades as $universidad): ?>
	<tr>
		<td><?php echo h($universidad['Universidad']['id']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['name']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['ciudad']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['calendario']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($universidad['Disponibilidad']['name'], array('controller' => 'disponibilidades', 'action' => 'view', $universidad['Disponibilidad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($universidad['Demanda']['name'], array('controller' => 'demandas', 'action' => 'view', $universidad['Demanda']['id'])); ?>
		</td>
		<td><?php echo h($universidad['Universidad']['website']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($universidad['User']['username'], array('controller' => 'users', 'action' => 'view', $universidad['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($universidad['Pais']['name'], array('controller' => 'paises', 'action' => 'view', $universidad['Pais']['id'])); ?>
		</td>
		<td><?php echo h($universidad['Universidad']['created']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $universidad['Universidad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $universidad['Universidad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $universidad['Universidad']['id']), null, __('Are you sure you want to delete # %s?', $universidad['Universidad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Universidad'), array('action' => 'add')); ?></li>
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
