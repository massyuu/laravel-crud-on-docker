<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view("article.index", ["articles" => $articles]);
    }

    public function create()
    {
        return view('article.create');
    }

    public function createComplete(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return view("article.create-complete");
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        return view('article.update', ['article' => $article]);
    }

    public function updateComplete(Request $request)
    {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return view("article.update-complete");
    }

    public function delete(Request $request, $id)
    {
        $article = Article::find($id);
        return view('article.delete', ['article' => $article]);
    }

    public function deleteComplete(Request $request)
    {
         Article::destroy($request->id);
        return view('article.delete-complete');
    }

}
