<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Brand extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user()->name);;
        // Chain fluent methods for configuration options
    }

    protected $guarded = [
		'id',
		'created_at',
		'updated_at',
	];

	public const UPLOAD_DIR = 'brands';

	public const ACTIVE = 'active';
	public const INACTIVE = 'inactive';

	public const STATUSES = [
		self::ACTIVE => 'Active',
		self::INACTIVE => 'Inactive',
	];

	public const EXTRA_LARGE = '1920x643';
	public const SMALL = '135x75';

	/**
	 * Scope active product
	 *
	 * @param Eloquent $query query builder
	 *
	 * @return Eloquent
	 */
	public function scopeActive($query)
	{
		return $query->where('status', self::ACTIVE);
	}

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_brands');
    }
}
