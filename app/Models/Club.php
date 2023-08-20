<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const UPLOAD_DIR = 'uploads/clubs';

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }

    public function stadion()
    {
        return $this->hasOne(Stadion::class);
    }

    public function leagues()
    {
        return $this->belongsToMany(TeamLeague::class, 'team_id');
    }

}
