<?php 
/**
 *Autores:
 *  Edgar García Camarillo
 *  Eugenio Rafael García García
 *  Luis Galeana Peralta
 *  Luis Eduardo Torres
 *
 * Descripción: Esta es la vista del detalle de universidad.
 */
?>
  	<h3>		<?php echo h($universidad['Universidad']['name']); ?></h3>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <!--Sidebar content-->
      <?php
        echo $this->Html->image('ES.jpg', array('class'=>'img-rounded'));
      ?>

    </div>
    <div class="span10">
      <!--Body content-->
      <?php echo __('Codigo'); ?>: &nbsp;<?php echo h($universidad['Universidad']['codigo']); ?></br>
      <?php echo __('Ubicación'); ?>: &nbsp;<?php echo h($universidad['Universidad']['ciudad']); ?>, &nbsp;<?php echo h($universidad['Pais']['name']); ?></br>
      <?php echo __('Requisitos de Idioma'); ?>: &nbsp;<?php echo h($universidad['Universidad']['idioma']); ?></br>
			
      <?php echo __('Calendario'); ?>: &nbsp;<?php echo h($universidad['Universidad']['calendario']); ?></br>
      <?php echo __('Disponibilidad'); ?>: &nbsp;<?php echo h($universidad['Disponibilidad']['name']); ?></br>
       <?php echo __('Demanda'); ?>: &nbsp;<?php echo h($universidad['Demanda']['name']); ?>
     </br>
      <?php echo __('Website'); ?>: &nbsp;<?php echo $this->Html->link($universidad['Universidad']['website'],'http://'.$universidad['Universidad']['website']); ?></br>
      <?php echo __('Más Información'); ?>: &nbsp;<?php echo $this->Html->link($universidad['Universidad']['codigo'],'http://mty116.mty.itesm.mx/temporal/pi/dyn/viewInfo.php?chUniCode='.$universidad['Universidad']['codigo']); ?></br>

 

    </div>
  </div>
</div>
</br>



<div class="related">
	<h3><?php echo __('Consideraciones Importantes'); ?></h3>
	<?php if (!empty($universidad['Requisito'])): ?>


   <div class="container-fluid">  
     <div class="accordion" id="accordion2">  
	<?php
		$i = 0;
		foreach ($universidad['Requisito'] as $requisito): ?>            

            <div class="accordion-group">  
              <div class="accordion-heading">  
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo $requisito['clave']; ?>">  
                 <?php echo $requisito['clave']; ?>: <?php echo $requisito['Categoria']['name']; ?>  
                </a>  
              </div>  
              <div id="<?php echo $requisito['clave']; ?>" class="accordion-body collapse">  
                <div class="accordion-inner">  
                  <?php echo $requisito['descripcion']; ?> 
                </div>  
              </div>  
            </div>  
              	<?php endforeach; ?>

            </div>  
          </div>  
    </div> 
		
<?php endif; ?>

</div>



<div class="related">
  <h3><?php echo __('Areas'); ?></h3>
  <?php if (!empty($areas)): 

    foreach ($areas as $area) {
  ?>
    <h3><?php echo $area['Area']['name']; ?></h3>
    <table cellpadding = "0" cellspacing = "0">
    <tr>
      <th><?php echo __('Carrera'); ?></th>
      <th><?php echo __('Nombre'); ?></th>
      <th><?php echo __('Area'); ?></th>
    </tr>
    <?php
      $i = 0;
      foreach ($area['Carrera'] as $carrera): ?>

      <tr>
        <td><?php echo $carrera['name']; ?></td>
        <td><?php echo $carrera['name2']; ?></td>
        <td><?php echo $carrera['Area']['name']; ?></td>
      </tr>
    <?php endforeach; ?>
    </table>

<?php 
    }
    endif; ?>
</div>



<div class="container">
<h2>Example of creating Popover with Twitter Bootstrap with title and content options</h2>
<div class="well">
<a href="#" id="dos" class="btn btn-success" rel="popover">hover for popover</a>
</div>
</div>


<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>


<script>
$(function ()
{ $("#dos").popover({title: 'Twitter Bootstrap Popover', content: "It's so simple to create a tooltop for my website!"});
});
</script>