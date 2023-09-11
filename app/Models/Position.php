<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status',
    ];

    public function parent() {
        return $this->belongsTo(Position::class, 'parent_id');
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'players');
    }
}
