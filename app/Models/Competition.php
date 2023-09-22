<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Competition extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $guarded = [];

    public const UPLOAD_DIR = 'uploads/competitions';
    

    public function clubs()
    {
        return $this->belongsToMany(Club::class);
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class);
    }

    public function matches()
    {
        return $this->belongsToMany(Matchs::class);
    }

    public function award()
    {
        return $this->hasOne(Award::class);
    }
}
