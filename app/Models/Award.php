<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function competition()
    {
        return $this->hasOne(Competition::class, 'id', 'competition_id');
    }
}
