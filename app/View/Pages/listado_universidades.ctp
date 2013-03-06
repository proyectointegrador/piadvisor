            </br>

           <div class="navbar">

              <div class="navbar-inner">
  <div class="input-append" style="text-align:right;">
  <input  type="text" class="input-block-level" id="appendedInputButton" style="text-align:right;" >
  <button class="btn" type="button" style="text-align:right;">Filtrar</button>
</div>
              </div>
            </div>



<div class="row">
  <div class="span9">
    hello
    
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


