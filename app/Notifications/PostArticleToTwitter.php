<?php

namespace App\Notifications;

use App\Models\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;


class PostArticleToTwitter extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(private Article $article)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TwitterChannel::class];
    }

    public function toTwitter($notifiable)
    {
        return new TwitterStatusUpdate($this->generateTweet());
    }

    public function generateTweet()
    {
        $title = $this->article->title();
        $url = route('articles.show', $this->article->slug());
        $author = $this->article->user();
        $author = $author->twitter() ? "@{$author->twitter()}" : $author->first_name() .' '. $author->last_name();

        return "{$title} by {$author}\n\n{$url}";
    }

    public function article()
    {
        return $this->article;
    }
}
