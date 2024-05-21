<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingType extends Model
{
    use HasFactory;

    protected $table = 'training_types';

    protected $guarded = [
		'id',
		'created_at',
		'updated_at',
	];

    public function sessions()
    {
        return $this->hasMany(TrainingSession::class);
    }
}
