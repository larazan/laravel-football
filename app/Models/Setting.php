<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Setting extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $table = 'settings';

    protected $fillable = [
        'title', 
        'meta_description', 
        'meta_keyword', 
        'short_des',
        'description',
        'address',
        'phone',
        'email', 
        'pinned_club',
        'twitter', 
        'facebook', 
        'instagram', 
        'country',
        'timezone',
        'time_format',
        'currency',
        'icon', 
        'original', 
        'medium', 
        'small'
    ];

    public const UPLOAD_DIR = 'uploads/setting';
    public const UPLOAD_DIR_ICON = 'uploads/icon';

    public const MEDIUM = '312x400';
	public const SMALL = '135x75';

    public const ID = 1;

    public static function selectedClub()
	{
        $setting = static::findOrFail(static::ID)->first();
		return $setting->pinned_club;
	}
}
