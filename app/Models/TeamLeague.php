<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLeague extends Model
{
    use HasFactory;

    protected $table = 'team_league_statistics';

    protected $guarded = [];

    public function clubs()
    {
        return $this->hasMany(Club::class);
    }
}
