<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Notifications\PostArticleToTwitter as PostArticleToTwitterNotification;
use Illuminate\Console\Command;
use Illuminate\Notifications\AnonymousNotifiable;

class PostArticleToTwitter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fo:post-article-to-twitter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Posts the latest unshared article to Twitter';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(AnonymousNotifiable $notifiable): void
    {
        if ($article = Article::nextForSharing()) {
            $notifiable->notify(new PostArticleToTwitterNotification($article));

            $article->markAsPosted();
        }
    }
}
