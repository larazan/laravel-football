<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class TeamLeague extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        $us = Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : "admin";
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". $us);
        // Chain fluent methods for configuration options
    }

    protected $table = 'team_league_statistics';

    protected $fillable = [
        'season',
        'team_id',
        'total_points',
        'total_goals',
        'total_goalsreceived',
        'total_goalsdiff',
        'total_wins',
        'total_draws',
        'total_losses',
        'home_points',
        'home_goals',
        'home_goalsreceived',
        'home_goalsdiff',
        'home_wins',
        'home_draws',
        'home_losses',
        'away_points',
        'away_goals',
        'away_goalsreceived',
        'away_goalsdiff',
        'away_wins',
        'away_draws',
        'away_losses',
    ];

    public function club()
    {
        return $this->hasOne(Club::class, 'id', 'team_id');
    }
}
