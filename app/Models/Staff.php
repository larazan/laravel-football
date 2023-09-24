<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Staff extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $table = 'staffs';
    protected $fillable = [
        'club_id',
        'name',
        'slug',
        'role',
        'birth_date',
        'birth_location',
        'country_id',
        'bio',
        'contract_from',
        'contract_until',
        'original',
        'medium',
        'small',
        'status',
    ];

    public const UPLOAD_DIR = 'uploads/staffs';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '600x656';
	public const EXTRA_LARGE = '1125x1200';

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
