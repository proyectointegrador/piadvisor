<div class="universidades index">
	<h2><?php echo __('Universidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo _('codigo'); ?></th>
			<th><?php echo _('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($universidades as $universidad): ?>
	<tr>
		<td><?php echo h($universidad['Universidad']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver Detalle'), array('action' => 'view', $universidad['Universidad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>

