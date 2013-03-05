            </br>

           <div class="navbar">

              <div class="navbar-inner">
  <div class="input-append">
  <input class="span2" id="appendedInputButton" type="text">
  <button class="btn" type="button">Go!</button>
</div>
              </div>
            </div>







	<table class="table table-bordered" >
	<tr>
			<th><?php echo _('Codigo'); ?></th>
			<th><?php echo _('Universidad'); ?></th>
			<th><?php echo _('Detalle'); ?></th>
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


