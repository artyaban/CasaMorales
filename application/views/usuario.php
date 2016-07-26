<style>.thumb{
     height: 200px;
     border: 1px solid #000;
  
     
     position: relative;
}</style>


<h1>Gracias por tu registro.</h1>

<h4 > Algunas ofertas para ti</h4>

<ul>
OFERTAS.
</ul>

<h1>Cambia tu imagen para mostrar</h1>

<img src='image' height="100px" width="100px">

<input type="file" id="files" name="files[]" />
<br />
<output id="list" ></output>
<br>

<script>
function archivo(evt) {
      var files = evt.target.files; // FileList object
       
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
       
           var reader = new FileReader();
           
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
}
             
      document.getElementById('files').addEventListener('change', archivo, false);</script>