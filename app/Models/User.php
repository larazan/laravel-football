<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'password', 
        'address1', 
        'address2', 
        'country_id',
        'state',
        'city',
        'postcode', 
        'profile_photo_path',
    ];

    public const UPLOAD_DIR = 'uploads/user';
	public const SMALL = '135x75';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function replies()
    {
        return $this->replyAble;
    }

    public function latestReplies(int $amount = 10)
    {
        return $this->replyAble()->latest()->limit($amount)->get();
    }

    public function deleteReplies()
    {
        foreach ($this->replyAble()->get() as $reply) {
            $reply->delete();
        }
    }

    public function countReplies(): int
    {
        return $this->replyAble()->count();
    }

    public function replyAble(): HasMany
    {
        return $this->hasMany(Reply::class, 'author_id');
    }
}
