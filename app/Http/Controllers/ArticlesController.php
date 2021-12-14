<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    //
    public function index(){
        return view('articles.index');
        // return "Hello";
    }

    public function create(){
        return view('articles.create');
    }

    public function save() {
        Article::create([
            'title' => request()->title,
            'slug' => Str::of(request()->title)->slug('-'), //request()->title,
            'content' => request()->content,
            'cover' => request()->cover,
            'user_id' => auth()->user()->id,
            'categoy_id' => 1,
            'viewcount' => 0
        ]);
        return "Created";
    }

    public function tinyupload(Request $request) {
        $fileName=$request->file('file')->getClientOriginalName();
         //php artisan storage:link
        $path=$request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location'=>"/storage/$path"]); 
    } 
    
}
