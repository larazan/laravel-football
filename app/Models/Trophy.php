<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trophy extends Model
{
    use HasFactory;

    protected $table = 'trophies';

    public const UPLOAD_DIR = 'uploads/trophies';

    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }

    public function competition()
    {
        return $this->hasOne(Competition::class, 'id', 'competition_id');
    }
}
