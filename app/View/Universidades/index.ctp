<?php
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres 
 *
 * Descripción: Esta es la vista de administración
 * 				para listar Universidades.
 */

?>
<div class="universidades index">
	<h2><?php echo __('Universidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th><?php echo $this->Paginator->sort('calendario'); ?></th>
			<th><?php echo $this->Paginator->sort('disponibilidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('demanda_id'); ?></th>
			<th><?php echo $this->Paginator->sort('página web'); ?></th>
			<th><?php echo $this->Paginator->sort('pais_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($universidades as $universidad): ?>
	<tr>
		<td><?php echo h($universidad['Universidad']['id']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['name']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['ciudad']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['calendario']); ?>&nbsp;</td>
		<td>
			<?php echo h($universidad['Disponibilidad']['name']); ?>
		</td>
		<td>
			<?php echo h($universidad['Demanda']['name']); ?>
		</td>
		<td><?php echo h($universidad['Universidad']['website']); ?>&nbsp;</td>
		<td>
			<?php echo h($universidad['Pais']['name']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $universidad['Universidad']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $universidad['Universidad']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $universidad['Universidad']['id']), null, __('Are you sure you want to delete # %s?', $universidad['Universidad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} totales, empezando en {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Universidad'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Disponibilidades'), array('controller' => 'disponibilidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Demandas'), array('controller' => 'demandas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Paises'), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Carreras'), array('controller' => 'carreras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Requisitos'), array('controller' => 'requisitos', 'action' => 'index')); ?> </li>
	</ul>
</div>
