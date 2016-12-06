<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{

	use Notifiable;

	protected $fillable = [
		'amount', 'status', 'description', 'lat', 'long', 'user_id', 'payment_id'
	];

	public function orderlines()
	{
		return $this->hasMany('App\Orderline');
	}
}
