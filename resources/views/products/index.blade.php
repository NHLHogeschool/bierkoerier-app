<h1>Bierkoerier Producten</h1>

@foreach ($products as $product)
<li>{{$product->name}}</li>
<li>{{$product->price}}</li>
<li>{{$product->description}}</li>
<li>{{$product->status}}</li>
@endforeach