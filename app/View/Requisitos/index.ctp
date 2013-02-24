<div class="requisitos index">
	<h2><?php echo __('Requisitos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('clave'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion2'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($requisitos as $requisito): ?>
	<tr>
		<td><?php echo h($requisito['Requisito']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requisito['Categoria']['name'], array('controller' => 'categorias', 'action' => 'view', $requisito['Categoria']['id'])); ?>
		</td>
		<td><?php echo h($requisito['Requisito']['clave']); ?>&nbsp;</td>
		<td><?php echo h($requisito['Requisito']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($requisito['Requisito']['descripcion2']); ?>&nbsp;</td>
		<td><?php echo h($requisito['Requisito']['created']); ?>&nbsp;</td>
		<td><?php echo h($requisito['Requisito']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $requisito['Requisito']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $requisito['Requisito']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $requisito['Requisito']['id']), null, __('Are you sure you want to delete # %s?', $requisito['Requisito']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Requisito'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
