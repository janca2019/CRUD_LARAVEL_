Mostrar la lista de productos


<table class="table table-light">
    <thead class="thead-light">
       
    <tr>
            <th>#</th>
            <th>Nombre producto</th>
            <th>Estado producto</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
       @foreach($products as $products); 
    <tr>
            <td>
<td>{{$products->id }}</td>
<td>{{$products->Nombre }}</td>
<td>{{$products->Estado}}</td>


<td>
   
<a href="{{ url('/products/'.$products->id.'/edit')}}">
Editar
</a>

@csrf
{{method_field('DELETE')}}

<form action="{{ url('/products/'.$products->id.')}}"  method="post">
<input type="submit" onclick="return confirm('¿quieres borrar')" value="Borrar">
    </form>

 Borrar</td>


            </td>
        </tr>
        @endforeach

    </tbody>

</table>