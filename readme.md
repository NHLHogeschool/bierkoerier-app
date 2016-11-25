#Les 4
We hebben nu een lijstje van producten, maar stel iemand wil een product kopen, wat hebben we nodig?

"Stel je hebt een winkel, hoe ga je bijhouden wie jou producten koopt?"

Maak eerst een nieuwe controller een `OrdersController`
Maak een nieuwe methode aan genaamd create.

```php
public function create() {
  return view('orders.create');
}
```

Maak vervolgens een mapje aan in `resources/views/` genaamd `orders` met daarin het bestand `create.blade.php`

Zet daar de volgende HTML in:

```html
	<!-- in later lessen gaan we dit mooi maken... !-->
	<h1>Bestelling plaatsen</h1>
	<form method="POST" name="bestelling">
		<label for="product">Wat voor bier wil je?</label>
		
		<select name="product">
			<option value="">Selecteer een biermerk</option>
			<option value="Hertog-Jan" selected">Hertog Jan</option>
			<option value="Heineken">Heineken</option>
		</select>
		{{csrf_token}}
		<input type="submit" value="Bestellen">
	</form>
```

Ga nu naar `/order/create` wat zie je?

Maar wij willen natuurlijk onze producten hier staan, hoe gaan we dit dan doen?

Pas de controller als volgt aan:
Wat we hier doen is alle producten ophalen en meegeven aan onze view, zodat wij er toegang tot hebben.

```php
// nu weet deze controller waar deze model zich bevindt.
use App\Product;

public function create() {
  $products = Product::all();
  return view('orders.create', compact('products'));
}
```

Pas de HTML aan zodat we alle producten als optie kunnen tonen.

```html	
<select name="product">
	@foreach($products as $product)
		<option value="{{$product->name}}">{{$product->name}}</option>
	@endforeach
</select>
```