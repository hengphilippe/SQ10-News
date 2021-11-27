<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;
use App\Models\Category;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::with('category')->get();
        return view('front.index', ["articles" => $articles]);
    }

    public function show(Article $article)
    {
        return view('front.article', ["article"=> $article]);
    }

}
