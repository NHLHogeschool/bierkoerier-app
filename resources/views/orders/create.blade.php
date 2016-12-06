@extends('layouts.app')
@section('content')
<div class="container">
<h1>Bestelling plaatsen</h1>
<form method="POST" name="bestelling">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="product">Product</label>
		<select name="product" class="form-control" id="product">
		@foreach($products as $product)
			<option value="{{$product->name}}">{{$product->name}}</option>
		@endforeach
		</select>
	</div>
	<input type="submit" name="submit" class="btn btn-succes" value="Geef mij bier!">
</form>
</div>
@endsection