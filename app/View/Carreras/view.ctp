<div class="carreras view">
<h2><?php  echo __('Carrera'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carrera['Carrera']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($carrera['Carrera']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name2'); ?></dt>
		<dd>
			<?php echo h($carrera['Carrera']['name2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carrera['Area']['name'], array('controller' => 'areas', 'action' => 'view', $carrera['Area']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carrera'), array('action' => 'edit', $carrera['Carrera']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carrera'), array('action' => 'delete', $carrera['Carrera']['id']), null, __('Are you sure you want to delete # %s?', $carrera['Carrera']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrera'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Universidades'), array('controller' => 'universidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Universidad'), array('controller' => 'universidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Universidades'); ?></h3>
	<?php if (!empty($carrera['Universidad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Calendario'); ?></th>
		<th><?php echo __('Disponibilidad Id'); ?></th>
		<th><?php echo __('Demanda Id'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Pais Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($carrera['Universidad'] as $universidad): ?>
		<tr>
			<td><?php echo $universidad['id']; ?></td>
			<td><?php echo $universidad['codigo']; ?></td>
			<td><?php echo $universidad['name']; ?></td>
			<td><?php echo $universidad['ciudad']; ?></td>
			<td><?php echo $universidad['calendario']; ?></td>
			<td><?php echo $universidad['disponibilidad_id']; ?></td>
			<td><?php echo $universidad['demanda_id']; ?></td>
			<td><?php echo $universidad['website']; ?></td>
			<td><?php echo $universidad['user_id']; ?></td>
			<td><?php echo $universidad['pais_id']; ?></td>
			<td><?php echo $universidad['created']; ?></td>
			<td><?php echo $universidad['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'universidades', 'action' => 'view', $universidad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'universidades', 'action' => 'edit', $universidad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'universidades', 'action' => 'delete', $universidad['id']), null, __('Are you sure you want to delete # %s?', $universidad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Universidad'), array('controller' => 'universidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
