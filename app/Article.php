<?php

namespace App;

use Goutte\Client;

class Article
{
    /** @var Goutte\Client */
    protected $client;

    /**
     * @param  Goutte\Client $client
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Hi-Blockchainから記事情報を取得
     *
     * @return array|null
     */
    public function getArticles()
    {
        $crawler = $this->client->request('GET', 'https://hi-blockchain.world/');
        $articles = collect();
        while (true) {
            $article_list = $crawler->filter('article')->each(function ($article) {
                if ($article->filter('img')->count()
                    && $article->filter('.post-list-title')->count()
                    && $article->filter('.post-list-date')->count()
                    && $article->filter('.post-list-link')->count()
                    && $article->filter('.category-techtec-news')->count()) {
                    $post_link = $article->filter('.post-list-link')->attr('href');
                    return [
                        'image' => $article->filter('img')->attr('src'),
                        'title' => $article->filter('.post-list-title')->text(),
                        'url' => $post_link,
                        'date' => $article->filter('.post-list-date')->text(),
                    ];
                }
            });
            $articles = $articles->merge($article_list);
            $current_page = $crawler->filter('.pagination .current')->text();
            $next_page = $crawler->filter('.pagination .inactive')
                ->each(function ($next) use ($current_page) {
                    if ($next->text() > $current_page) {
                        return $next->text();
                    }
                });
            $next_page = array_merge(array_filter($next_page));
            $next_page = count($next_page) ? $next_page[0] : $next_page;
            if ($current_page + 1 != $next_page) {
                break;
            }
            $link = $crawler->selectLink($next_page)->link();
            $crawler = $this->client->click($link);
        }
        return $articles->filter()->toArray();
    }
}
