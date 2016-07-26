<style>
.cuadro1{background-color: #dfcdb9;box-shadow: 1px 1px 1px #fff; }
.cuadro1:hover{background-color: rgba(225, 178, 77, 0.8);box-shadow: 1px 1px 1px #fff;}
.cuadro2{background-color: #dfcdb9; box-shadow: 1px 1px 1px #fff;}
.cuadro2:hover{background-color: rgba(225, 178, 77, 0.8);box-shadow: 1px 1px 1px #fff;}
.cuadro3{background-color: #dfcdb9; box-shadow: 1px 1px 1px #fff;}
.cuadro3:hover{background-color: rgba(225, 178, 77, 0.8); box-shadow: 1px 1px 1px #fff;}
</style>


<script type="text/javascript">

var activeMantel=false;

	function vermantel()
	{
		if(activeMantel==false)
		{
		document.getElementById('mantel').style.height = '200px';
		document.getElementById('botonmantel').style.display = '';
		document.getElementById('descmantel').style.display = '';
		activeMantel=true;
		}else{
		document.getElementById('mantel').style.height = '';
		document.getElementById('botonmantel').style.display = 'none';
		document.getElementById('descmantel').style.display = 'none';
		activeMantel=false;
		}

	}

</script>
<div class='col-md-12' style='margin:solid #fff;'>


<a href="<?echo base_url();?>index.php/ProductosController">

</a>

<div class='col-md-4 cuadro1' id="mantel" onclick="vermantel();">
<h4 style="font-family: 'Cormorant Unicase', serif;"  >Manteles</h4>
<h5 style="display:none;" id='descmantel'><hr>Aqui puedes encontrar el mantel que buscas al mejor precio click en el boton para ver manteles</h5>
<button class="btn btn-link" id='botonmantel' style="display:none">MANTELES</button>
</div>


<div class='col-md-4 cuadro2'>
<h4 style="font-family: 'Cormorant Unicase', serif;">Albas</h4>
</div>


<div class='col-md-4 cuadro3'>
<h4 style="font-family: 'Cormorant Unicase', serif;">Estolas</h4>
</div>


<br><br><br><br>
<h4><a href='<?echo base_url()?>index.php/welcome/registro'>Registro de usuario</a></h4>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>

