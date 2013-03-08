<div class="universidades view">
<h2><?php  echo __('Universidad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($universidad['Universidad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($universidad['Universidad']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($universidad['Universidad']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($universidad['Universidad']['ciudad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calendario'); ?></dt>
		<dd>
			<?php echo h($universidad['Universidad']['calendario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disponibilidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($universidad['Disponibilidad']['name'], array('controller' => 'disponibilidades', 'action' => 'view', $universidad['Disponibilidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Demanda'); ?></dt>
		<dd>
			<?php echo $this->Html->link($universidad['Demanda']['name'], array('controller' => 'demandas', 'action' => 'view', $universidad['Demanda']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($universidad['Universidad']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais'); ?></dt>
		<dd>
			<?php echo $this->Html->link($universidad['Pais']['name'], array('controller' => 'paises', 'action' => 'view', $universidad['Pais']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Carreras Relacionadas'); ?></h3>
	<?php if (!empty($universidad['Carrera'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Siglas'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Area'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($universidad['Carrera'] as $carrera): ?>
		<tr>
			<td><?php echo $carrera['name']; ?></td>
			<td><?php echo $carrera['name2']; ?></td>
			<td><?php echo $carrera['Area']['name']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Requisitos'); ?></h3>
	<?php if (!empty($universidad['Requisito'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($universidad['Requisito'] as $requisito): ?>
		<tr>
			<td><?php echo $requisito['Categoria']['name']; ?></td>
			<td><?php echo $requisito['clave']; ?></td>
			<td><?php echo $requisito['descripcion']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
