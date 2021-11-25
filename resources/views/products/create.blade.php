crear productos 



<form action= "{{url('/products')}}" method="POST" enctype="multipart/form-data">
    
@csrf
@include('products.form');


</form>