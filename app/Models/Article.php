<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Article extends Model
{
    use HasFactory, LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName} by: ". Auth::user() ? Auth::user()->first_name .' '. Auth::user()->last_name : 'admin');
        // Chain fluent methods for configuration options
    }

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'rand_id',
        'published_at',
        'published',
        'status',
        'body',
        'article_tags',
        'meta_title',
        'meta_description',
        'original',
        'large',
        'medium',
        'small',
    ];

    public const UPLOAD_DIR = 'uploads/articles';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '1000x600';

    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';

    public const STATUSES = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive',
    ];

    public static function statuses()
	{
		return self::STATUSES;
	}

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoryArticles()
    {
        return $this->belongsToMany(CategoryArticle::class, 'article_categories');
    }

    public function scopePublished($query, $published = true)
    {
        return $query->where('published', $published);
    }

    public function scopeForTag(Builder $query, string $tag): Builder
    {
        return $query->whereHas('tagsRelation', function ($query) use ($tag) {
            $query->where('tags.slug', $tag);
        });
    }

    public function comments() 
    {
        return $this->morphMany(Comment::class, 'commentable')
            ->latest()
            ->whereNull('parent_id');
    }
}
