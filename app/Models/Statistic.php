<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'match_id',
        'player_id',
        'minute_play',
        'goals',
        'assists',
        'subs_on',
        'subs_off',
        'yellow_card',
        'red_card',
        'status',
    ];
}
