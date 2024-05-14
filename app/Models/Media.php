<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Media extends Model
{
    use HasFactory, HasTrixRichText, LogsActivity;

	public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

	protected $table = 'medias';
    protected $fillable = [
		'user_id',
		'title',
		'slug',
		'rand_id',
		'published_at',
		'published',
		'status',
		'body',
		'video_url',
		'original',
		'medium',
		'small',
		'meta_title',
        'meta_description',
	];

	public const UPLOAD_DIR = 'uploads/medias';

	public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';

	public const STATUSES = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive',
    ];

    public static function statuses()
	{
		return self::STATUSES;
	}
}
