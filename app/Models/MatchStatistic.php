<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchStatistic extends Model
{
    use HasFactory;

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
