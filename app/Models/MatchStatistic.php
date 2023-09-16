<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class MatchStatistic extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user()->name);;
        // Chain fluent methods for configuration options
    }

    protected $table = 'match_statistics';

    protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

    /**
	 * Relationship with the match
	 *
	 * @return array
	 */
	public function matchs()
	{
		return $this->belongsTo(Matchs::class);
	}
}
