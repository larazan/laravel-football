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
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $table = 'match_statistics';

    protected $fillable = [
		'match_id',
		'home_possession',
		'home_offsides',
		'home_fouls',
		'home_total_shots',
		'home_shots_on_target',
		'home_corners',
		'home_passes',
		'home_pass_accuracy',
		'home_crosses',
		'home_yellow_cards',
		'home_red_cards',
		'away_possession',
		'away_offsides',
		'away_fouls',
		'away_total_shots',
		'away_shots_on_target',
		'away_corners',
		'away_passes',
		'away_pass_accuracy',
		'away_crosses',
		'away_yellow_cards',
		'away_red_cards',
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
