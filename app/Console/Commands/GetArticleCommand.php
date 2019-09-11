<?php

namespace App\Console\Commands;

use App\Article;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class GetArticleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:article';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Articles from Hi-Blockchain.';

    /**
     * @var array
     */
    protected $article;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Article $article)
    {
        parent::__construct();

        $this->article = $article;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $articles = $this->article->getArticles() ?? [];
        Cache::forever('articles', $articles);

        logger($articles);
    }
}
