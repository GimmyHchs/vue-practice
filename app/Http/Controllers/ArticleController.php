<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
    public function all()
    {
        $articles = Article::all();
        return view('vue.advance.get-articles-from-db', compact('articles'));
    }
}
