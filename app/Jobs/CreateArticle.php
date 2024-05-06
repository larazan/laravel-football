<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mews\Purifier\Facades\Purifier;
use App\Http\Requests\ArticleStoreRequest;
use App\Events\ArticleWasCreated;

class CreateArticle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $title;
    private $body;
    private $category;
    private $tags;
    private $author;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $title, string $body, string $category, array $tags, User $author)
    {
        //
        $this->title = $title;
        $this->body = $body;
        $this->category = $category;
        $this->tags = $tags;
        $this->author = $author;
    }

    public static function fromRequest(ArticleStoreRequest $request): self
    {
        return new static(
            $request->title(),
            $request->body(),
            $request->category(),
            $request->tags(),
            $request->author(),
        );
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $article = new Article([
            'title'         => $this->title,
            'slug'          => Str::slug($this->title),
            'body'          => Purifier::clean($this->body),
            'category_id'   => $this->category,
            'article_tags'   => $this->tags,
        ]);

        $article->authoredBy($this->author);
        // $article->syncTags($this->tags);
        $article->save();

        event(new ArticleWasCreated($article));

        return $article;
    }
}
