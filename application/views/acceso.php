<div class='col-md-10'>
<form class='form-horizontal' action='<?echo base_url();?>index.php/welcome/comprueba' method='post'>
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Usuario:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name='usuario' placeholder="Usuario">
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Contraseña:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name='pass' placeholder="Contraseña">
    </div>
  </div>


<div class="form-group">
  
  <div class="col-sm-10">
      <button class='btn-success' type='submit' name="boton" id='boton'>Aceptar</button>
    </div>
  </div>


</form>
</div>