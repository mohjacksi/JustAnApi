<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    // Laravel will return 404 if the article is not found! there is no need to findOrFail
    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    // Laravel will return 404 if the article is not found! there is no need to findOrFail
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
    //        $article = Article::findOrFail($id);
    //        $article->update($request->all());

        return response()->json($article, 200);
    }

    // Laravel will return 404 if the article is not found! there is no need to findOrFail
    public function delete(Article $article)
    {
        $article->delete();
    //        $article = Article::findOrFail($id);
    //        $article->delete();

        return response()->json(null, 204);
    }

}
