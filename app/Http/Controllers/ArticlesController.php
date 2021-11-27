<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $posts = Article::all();
        return view('front.index', ["posts" => $posts]);
    }

    public function show(Article $article)
    {
        return view('front.article', ["article"=> $article]);
    }

}
