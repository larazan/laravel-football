<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [
		'id',
		'created_at',
		'updated_at',
	];

    // public function cart_shipping(){
    //     return $this->hasOne(CartShipping::class,'cart_group_id','cart_group_id');
    // }

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $casts = [
        'attributes' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class)->where('status', 1);
    }
}
