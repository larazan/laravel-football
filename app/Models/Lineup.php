<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }

    public function match()
    {
        return $this->belongsTo(Matchs::class);
    }
}
