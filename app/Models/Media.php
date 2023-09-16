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
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user()->name);;
        // Chain fluent methods for configuration options
    }

	protected $table = 'medias';
    protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	public const UPLOAD_DIR = 'uploads/medias';

	public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '600x656';
	public const EXTRA_LARGE = '1125x1200';

	public const STATUSES = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive',
    ];

    public static function statuses()
	{
		return self::STATUSES;
	}
}
