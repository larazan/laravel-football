<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Laravel\Scout\Searchable;

class Player extends Model
{
    use HasFactory, LogsActivity;
    use Searchable;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $fillable = [
        'club_id',
        'level',
        'name',
        'slug',
        'gender',
        'birth_date',
        'birth_location',
        'country_id',
        'bio',
        'height',
        'weight',
        'prefered_foot',
        'contract_from',
        'contract_until',
        'shirt_number',
        'position_id',
        'facebook',
        'instagram',
        'twitter',
        'original',
        'large',
        'medium',
        'small',
        'status',
    ];

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

    public function posName($id)
    {
        $pos = Position::find($id)->first();
        return $pos->name;
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function positions()
    {
        return $this->belongsToMany(Position::class, 'player_positions');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id(),
            'name' => $this->name(),
            'slug' => $this->slug(),
            'level' => $this->level(),
            'gender' => $this->gender(),
        ];
    }
}
