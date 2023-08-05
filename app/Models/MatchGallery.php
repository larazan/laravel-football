<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchGallery extends Model
{
    use HasFactory;

    protected $table = 'match_galleries';

    public const UPLOAD_DIR = 'uploads/matchs';

	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '600x656';
	public const EXTRA_LARGE = '1125x1200';

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
