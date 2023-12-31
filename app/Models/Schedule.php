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
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $fillable = [
        'slug',
        'season',
        'competition_id',
        'stadion_id',
        'home_team',
        'away_team',
        'full_time_home_goal',
        'full_time_away_goal',
        'fixture_match',
        'hour',
        'minute',
        'full_time_result',
        'status',
    ];

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
