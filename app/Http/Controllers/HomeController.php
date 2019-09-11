<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Article $article)
    {
        $articles = Cache::get('articles');
        if (!$articles) {
            $articles = $article->getArticles() ?? [];
            Cache::forever('articles', $articles);
        }

        return view('home')->with(compact('articles'));
    }
}
