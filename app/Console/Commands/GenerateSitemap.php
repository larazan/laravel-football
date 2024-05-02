<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Psr\Http\Message\UriInterface;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // php artisan fo:generate-sitemap
     protected $signature = 'fo:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl the site to generate a sitemap.xml file';

    private array $noIndexPaths = [
        '',
        // '/forum/*',
        // '/login/github',
        '/user/*',
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SitemapGenerator::create(config('app.url'))
            ->shouldCrawl(function (UriInterface $url) {
                return $this->shouldIndex($url->getPath());
            })
            ->hasCrawled(function (Url $url) {
                if ($this->shouldNotIndex($url->path())) {
                    return;
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));
    }

    private function shouldNotIndex(string $path): bool
    {
        return Str::is($this->noIndexPaths, $path);
    }

    private function shouldIndex(string $path): bool
    {
        return ! $this->shouldNotIndex($path);
    }
}
