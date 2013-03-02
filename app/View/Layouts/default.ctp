<?php
/**
 *Autores:
 *	Edgar García Camarillo
 *	Eugenio Rafael García García
 *	Luis Galeana Peralta
 * 	Luis Eduardo Torres
 *
 * Descripción: Esta es la vista base de pa aplciacion para el template de toda la aplicaicon en donde se enocntarra el hedar y footer.
 */


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->meta(array("name"=>"viewport",
      "content"=>"width=device-width,  initial-scale=1.0"));

		echo $this->Html->css('cake.generic');
	    echo $this->Html->css('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>



</head>
<body>



     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Intercambio Internacional</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Preferencias</a></li>
              <li><a href="#about">Listado de Universidades</a></li>
              <li><a href="#contact">Descripción</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>






			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>






	<?php echo $this->element('sql_dump'); ?>


   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>
