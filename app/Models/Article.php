<?php

namespace App\Models;

use App\Traits\HasLikes;
use App\Models\ReplyAble;
use App\Traits\HasAuthor;
use App\Traits\HasReplies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Laravel\Scout\Searchable;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;


class Article extends Model implements Feedable
{
    use HasFactory; 
    use LogsActivity;
    use Searchable;
    use HasLikes;
    use HasReplies;

    protected $table = 'articles';

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

    protected $with = [];

    const FEED_PAGE_SIZE = 20;

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

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function excerpt(int $limit = 100): string
    {
        return Str::limit(strip_tags($this->body()), $limit);
    }

    public function readTime()
    {
        $minutes = round(str_word_count($this->body()) / 200);

        return $minutes == 0 ? 1 : $minutes;
    }

    public function replyAbleSubject(): string
    {
        return $this->title();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category($categoryId)
    {
        $cat = CategoryArticle::find($categoryId)->first();
        return $cat->name;
    }

    public function categoryArticles()
    {
        return $this->belongsToMany(CategoryArticle::class);
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

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', self::ACTIVE);
    }

    public function comments() 
    {
        return $this->morphMany(Comment::class, 'commentable')
            ->latest()
            ->whereNull('parent_id');
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
        ];
    }

    public static function getFeedItems(): Collection
    {
        return self::published()
            ->recent()
            ->paginate(self::FEED_PAGE_SIZE)
            ->getCollection();
    }

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id())
            ->title($this->title())
            ->summary($this->excerpt())
            ->updated($this->updatedAt())
            ->link(route('articles.show', $this->slug()))
            ->authorName($this->author()->name());
    }

    public function scopeNotShared(Builder $query): Builder
    {
        return $query->whereNull('shared_at');
    }

    public static function nextForSharing(): ?self
    {
        return self::notShared()
            ->published()
            ->orderBy('created_at', 'asc')
            ->first();
    }

    public function markAsPosted()
    {
        $this->update([
            'shared_at' => now(),
        ]);
    }
}
