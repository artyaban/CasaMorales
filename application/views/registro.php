
<div class='col-md-10'>

<br>
<center><h3>Registro.</h3></center>
<p>Con tu registro recibe nuestras mejores promociones exclusivas para los mejores clientes directamente en tu correo.</p>
</br>
<form class='form-horizontal' method='post' action='<?echo base_url()?>index.php/welcome/nuevousuario'>
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Nombre:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name='nombre' placeholder="Nombre">
    </div>
  </div>


<div class="form-group">
    <label class="control-label col-sm-2" for="email">Apellido:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="apellido" placeholder="Apellido">
    </div>
  </div>



  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Correo:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="correo" placeholder="Correo">
    </div>
  </div>




  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Telefono: </label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" name='tel' placeholder="Telefono">
    </div>
  </div>




  <div class="form-group">
    <label class="control-label col-sm-2" for="cel">Celular:</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control"  name='cel' placeholder="Celular">
    </div>
  </div>




  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Usuario:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="usuario" name='usuario' placeholder="Usuario">
    </div>
  </div>



<div class="form-group">
    <label class="control-label col-sm-2" for="email">Contraseña:</label>
    <div class="col-sm-10">
 <input type="password" class="form-control" id="pass1" name='pass1' placeholder="Contraseña" onchange="revisa()">
    </div>
  </div>


<div class="form-group">
    <label class="control-label col-sm-2" for="email">Repite tu Contraseña:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pass2" placeholder="Contraseña"  onchange="revisa()">
    </div>
  </div>

<a id='mensaje'></a>


<div class="form-group">
  
  <div class="col-sm-10">
      <button class='btn-success' name="boton" id='boton' disabled="true">Aceptar</button>
    </div>
  </div>
</form>
<hr>
</div>



<script type="text/javascript">
	function revisa(){
 	var pass1 = document.getElementById('pass1').value;
 	var pass2 = document.getElementById('pass2').value;
 	if(pass1=='' || pass2=='')
 	{
 		document.getElementById('boton').disabled = true;
 		 document.getElementById('boton').className ="btn-success";	    
 	    document.getElementById('mensaje').innerHTML ='';
 	}
 	if( pass1!='' && pass2!='')
 	{
 	if(pass1==pass2){
 		document.getElementById('boton').disabled = false;
 	    document.getElementById('boton').className ="btn-success";	    
 	    document.getElementById('mensaje').innerHTML ='';
 	}else{
		document.getElementById('boton').disabled = true;
		document.getElementById('boton').className ="btn-danger";
		document.getElementById('mensaje').innerHTML ='tus contraseñas no coinciden';
 	}}}
</script>