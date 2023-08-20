<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const UPLOAD_DIR = 'uploads/trophies';

    public function clubs()
    {
        return $this->belongsToMany(Club::class);
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class);
    }

    public function matches()
    {
        return $this->belongsToMany(Matchs::class);
    }

    public function award()
    {
        return $this->hasOne(Award::class);
    }
}
