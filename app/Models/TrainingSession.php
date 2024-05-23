<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingSession extends Model
{
    use HasFactory;

    protected $table = 'training_sessions';

    protected $guarded = [
		'id',
		'created_at',
		'updated_at',
	];

    public function type()
    {
        return $this->belongsTo(TrainingType::class, 'training_type_id');
    }
}
