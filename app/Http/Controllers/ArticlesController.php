<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;
use \App\Models\Category;

class ArticlesController extends Controller
{

    public function showall()
    {
        $categories = Category::all();
        $articles = Article::with('category')->get();
        return view('front.index', ["articles" => $articles, "categories"=> $categories]);
    }

    public function showAllByCategory($id)
    {
        $categories = Category::all();
        $articles = Article::where("category_id", $id)->get();
        return view('front.article_by_id', ["articles" => $articles, "categories"=> $categories]);
    }


    public function show(Article $article)
    {
        $categories = Category::all();
        return view('front.article', ["article"=> $article->load('category'), "categories"=> $categories]);
    }

}
