crear productos


<form action="{{url('/Productos')}}" method="POST" enctype="multipart/form-data">
    
@csrf


<label for="nombreProducto">Nombre del producto</label>
<input   type="text" name="nombreProducto" id="nombreProducto">

<br>
<label for="Cantidad">Cantidad</label>
<input  type="text" name="Cantidad" id="Cantidad">
<br>

<input  type="submit" name="enviar" id="enviar">

</form>