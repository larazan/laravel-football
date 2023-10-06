<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $casts = [
        'min_purchase' => 'float',
        'max_discount' => 'float',
        'discount' => 'float',
        'limit'=>'integer',
    ];
    
    public function scopeActive($query)
    {
        return $query->where('status', '=', 1);
    }
    
    public function scopeModule($query, $module_id)
    {
        return $query->where('module_id', $module_id);
    }
}
