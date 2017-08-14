<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    // public function create(Request $request)
    // {

    // 	$article = new Article($request->all());
    // 	$article->save();
    // 	return redirect()->back();
    // }

    public function index()
    {
    	$articles = Article::all();
        return view('articles')->with(['articles' => $articles]);
    }
    
    public function show($id)
    {
        $article = Article::where('id', $id)->first();
        return view('article')->with(['article' => $article]);
    }
}
