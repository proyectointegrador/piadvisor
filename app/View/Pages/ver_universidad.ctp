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
			
      <?php echo __('Calendario'); ?>: &nbsp;<?php echo h($universidad['Universidad']['calendario']); ?></br>
      <?php echo __('Disponibilidad'); ?>: &nbsp;<?php echo h($universidad['Disponibilidad']['name']); ?></br>
       <?php echo __('Demanda'); ?>: &nbsp;<?php echo h($universidad['Demanda']['name']); ?>
     </br>
      <?php echo __('Website'); ?>: &nbsp;<?php echo $this->Html->link($universidad['Universidad']['website'],'http://'.$universidad['Universidad']['website']); ?></br>

 

    </div>
  </div>
</div>
</br>



<div class="related">
	<h3><?php echo __('Requisitos'); ?></h3>
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
	<h3><?php echo __('Carreras ofrecidas en la Universidad'); ?></h3>
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
