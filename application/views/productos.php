
<div class='col-md-1'>
</div>
<div class='col-md-10' style='align-content: center; background-color:rgba(247, 247, 247, 0.85); '>

<center><h1 style='text-shadow:3px 3px 1px #fff; color: #523629; text-align: center;'>Nuestros productos.</h1></center>
<hr>
 <?
$cont=1;
 foreach ($productos as $key => $producto) {
?>
<div class='col-md-3' style='align-content: center; background-color: #fff; border: solid 1px #000;box-shadow: 3px 3px 7px #333;margin: 20px;'>
<h1 style="font-family: 'Lovers Quarrel', cursive;margin: 20px;text-align:center;"> <?	echo $producto->nombre;?></h1>
<hr>
 <p align="center"><img src='<?echo base_url().'imagenes/'.$producto->url_imagen;?>' > </p>
<hr>
</div>
<?
if($cont==3)
{
	echo '<br>';
	$cont=1;
}
}?>
</div>
<div class='col-md-1'>
</div>
