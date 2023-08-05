<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $table = 'newsletter_subscribers';

    public const UPLOAD_DIR = 'uploads/matchs';

	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];
}
