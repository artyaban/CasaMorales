
<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bordados Casa Morales</title>
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?echo base_url()?>css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- The below script Makes IE understand the new html5 tags are there and applies our CSS to it -->
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?echo base_url()?>js/jquery-ui-1.8.13.custom.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">


<!-- The below script Makes IE understand the new html5 tags are there and applies our CSS to it -->
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="shortcut icon" href="<?base_url();?>imagenes/logo.ico" type="image/ico" />
</head>
<body id="home">

<header>
    <div class="wrapper">
        <h1><a href="index.html" id="brand" title="Bordados Casa Morales">Bordados Casa Morales</a></h1>
         <nav>
            <ul>
                <li>
                  <a href="#">Inicio</a>
                  <ul class="sub-menu">  
                        <li><a href="<? base_url();?>index.php/welcome/nosotros">Quienes Somos</a></li>
                        <li><a href="mision.html">Misión</a></li>
                        <li><a href="vision.html">Visión</a></li>
                        <li><a href="valores.html">Valores</a></li>
                    
                    </ul>
                </li>
                <li><a href="#">Catalogo</a>
                 <ul class="sub-menu">
                         <li><a href="manteles.html">Manteles</a></li>
                        <li><a href="estolas.html">Estolas</a></li>
                        <li><a href="casullas.html">Casullas</a></li>
                        <li><a href="estandartes.html">Estandartes</a></li>
                        <li><a href="juego.html">Juego de altar</a></li>
                        <li><a href="pano.html">Paño de Hombros</a></li>
                         <li><a href="search.html">Ver todos los artículos</a></li>
                    </ul></li>
                </li>
                <li><a href="contacto.php">Contacto</a>
               <ul class="sub-menu">
                      
                    </ul></li></li>
                <li><a href="informacion.html">Información Litúrgica </a>
                  <ul class="sub-menu">
                       
                        
                    </ul></li>

                     </ul></li></li>
               
                  <ul class="sub-menu">
                       
                        
                    </ul></li>
          </ul>
        </nav>
    </div>
</header>
<aside id="top">
	<div class="wrapper">
        <ul id="social">
            <li><a href="https://www.facebook.com/profile.php?id=100006119025735&fref=ts"  target="_blank" class="facebook" title="like us us on Facebook">like us us on Facebook</a></li>
          
        </ul>
       
        <div id="action-bar"><a href="Administrador.php">Administrador</a></div>
    </div>
</aside>
<article> 
  <img src="<?base_url();?>imagenes/sanantonio.jpg"  />


</article>
<footer>
	<div class="wrapper">
    	<span class="logo">Bordados Casa Morales.</span>
        <a  target="_blank"  class="right">Bordados Casa Morales , Aguascalientes , Ags.</a> <a href="#">Calle Tulum #101 Fracc. Pirámides C.P. 20275 </a><a href="#">Tel : 01(044)18-18-80. Cel: 045*4492066541</a> 
        <a > bordadoscasamorales@gmail.com</a><br />
       
</footer>
</body>
</html>