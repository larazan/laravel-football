<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Club extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user()->name);
        // Chain fluent methods for configuration options
    }

    protected $guarded = [];

    public const UPLOAD_DIR = 'uploads/clubs';

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }

    public function stadion()
    {
        return $this->hasOne(Stadion::class, 'id', 'stadion_id');
    }

    public function leagues()
    {
        return $this->belongsToMany(TeamLeague::class, 'team_id');
    }

}
