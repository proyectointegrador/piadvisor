<?php 
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres
 *
 * Descripción: Esta es la vista de la lista de universidades.
 */
?>

<div class="navbar">

  <div class="navbar-inner">
	 <div class="input-append" style="text-align:right;">
		  <input  type="text" class="input-block-level" id="appendedInputButton" style="text-align:right;" >
		  <button class="btn" type="button" style="text-align:right;">Filtrar</button>
	</div>
  </div>
</div>

	<table class="table table-bordered" >
	<tr>
			<th><?php echo _('Codigo'); ?></th>
			<th><?php echo _('Universidad'); ?></th>
			<th><?php echo _('Idioma'); ?></th>
			<th><?php echo _('Detalles'); ?></th>
	</tr>
	<?php foreach ($universidades as $universidad): ?>
	<tr>
		<td><?php echo h($universidad['Universidad']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['name']); ?>&nbsp;</td>
		<td><?php echo h($universidad['Universidad']['idioma']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver Detalles'), array('action' => 'ver_universidad', $universidad['Universidad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>


