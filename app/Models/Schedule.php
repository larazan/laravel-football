<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Schedule extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user()->name);;
        // Chain fluent methods for configuration options
    }

    protected $guarded = [];

    // public const PINNED = self::pinnedClub();

    public static function pinnedClub()
    {
        $setting = Setting::findOrFail(1);
        return $setting->pinned_club;
    }

    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
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
