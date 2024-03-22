<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
		'order_id',
		'product_id',
		'quantity',
		'product_details',
		'base_price',
		'total_price',
		'tax_amount',
		'tax_percent',
		'discount_amount',
		'discount_type',
		'sub_total',
		'attributes',
	];

	/**
	 * Define relationship with the Product
	 *
	 * @return void
	 */
	public function product()
	{
		return $this->belongsTo('App\Models\Product');
	}
}
