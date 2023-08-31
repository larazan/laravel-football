<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;

    protected $table = 'matchs';

    protected $guarded = [];

    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }

    public function lineup()
    {
        return $this->hasOne(Lineup::class);
    }

    public function competition()
    {
        return $this->hasOne(Competition::class, 'id', 'competition_id');
    }

    public function stadion()
    {
        return $this->hasOne(Stadion::class, 'id', 'stadion_id');
    }

    public function home()
    {
        return $this->hasOne(Club::class, 'id', 'home_team');
    }

    public function away()
    {
        return $this->hasOne(Club::class, 'id', 'away_team');
    }
}
