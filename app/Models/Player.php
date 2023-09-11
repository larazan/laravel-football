<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Player extends Model
{
    use HasFactory, LogsActivity;
    
    protected $guarded = ['id'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user()->name);;
        // Chain fluent methods for configuration options
    }

    public const UPLOAD_DIR = 'uploads/players';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '600x656';
	public const EXTRA_LARGE = '1125x1200';

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function lineups()
    {
        return $this->belongsToMany(Lineup::class)->latest();
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
