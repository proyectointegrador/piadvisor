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
<?php

$continentes = Configure::read('Continentes');

?>
<div class="navbar">

  <div class="navbar-inner">
	 <div class="input-append" style="text-align:right;">
	 	<?php echo $this->Form->create('Page',array('action'=>'listado_universidades')); ?>
	 	<div class="forma on-5 columns">
	 		<div class="campo column" style="margin-top:10px;">
	 			<label>Nombre</label>
	 			<input  type="text" class="input-block-level" id="appendedInputButton" style="text-align:right;" >
		  		
	 		</div>
	 		<div class="campo column">
	 			<?php
	 			echo $this->Form->input('Page.carrera_id',array('empty'=>'----'));
	 			?>
	 		</div>
	 		<div class="campo column">
	 			<?php
	 			echo $this->Form->input('Page.continente_id',array('options' => $continentes,'empty'=>'----'));
	 			?>
	 		</div>
	 		<div class="campo column">
	 			<?php
	 			echo $this->Form->input('Page.pais_id',array('empty'=>'----'));
	 			?>
	 		</div>
	 		<div class="campo column">
		  		<button id="Filtrar" class="btn" type="submit" style="text-align:right;">Filtrar</button>
		  		<?php
		  			$datos = $this->Js->get("#PageListadoUniversidadesForm")->serializeForm(array('isForm' => true, 'inline' => true));
					$this->Js->get('#Filtrar')->event('click', $this->Js->request( 
								array('controller' => 'pages', 'action' => 'listadoajax'), 
								array( 
								'update' => '#listadoajax',
								'async' => true, 
								'dataExpression' => true, 
								'method' => 'post', 
								'data' => $datos
								) ) );

				?>
		  	</div>
		</div>
		<?php echo $this->Form->end();?>
	</div>
  </div>
</div>


<div id="listadoajax">
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

</div>

<?php
  echo $this->Js->writeBuffer();
?>
