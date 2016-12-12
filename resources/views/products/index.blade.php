@extends('layouts.app')
@section('content')

<div class="container">
	<h1>Bierkoerier Producten</h1>
	<div class="panel panel-default">
		<div class="panel-heading">Acties</div>
		<div class="panel-body">
			<a href="{{route('create-product')}}" class="btn btn-primary">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Product Toevoegen
			</a>
		</div>
	</div>
	<table class="table table-bordered" style="background-color: white">
		<tr>
			<th>#</th>
			<th>Naam</th>
			<th>Beschrijving</th>
			<th>Status</th>
		</tr>
		@foreach ($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->description }}</td>
			<td>
				@if($product->status == 0)
				<span>Niet beschikbaar</span>
				@else
				<span>Beschikbaar</span>
				@endif
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection