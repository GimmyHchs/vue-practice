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
    public function crud()
    {
        $resource = '/vue/article';
        return view('vue.advance.crud', compact('resource'));
    }
    public function index(Request $request)
    {
        $articles = Article::all();
        if($request->ajax())
        {
            return $articles;
        }
        return 'index in ArticleController';
    }
    public function show(Request $request, $id)
    {
        $article = Article::find($id);
        if($request->ajax())
        {
            if(empty($article))
               return response('not find id :'.$id, 404);
            return array($article);
        }
        return 'show in ArticleController';
    }
    public function destroy(Request $request, $id){
        $article = Article::find($id);
        $article->delete();
        if($request->ajax())
        {
            return response('Deleted Success!', 200);
        }
        return 'destroy in ArticleController';
    }
}
