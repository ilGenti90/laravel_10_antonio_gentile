<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = article::all();
        return view('article.index', compact('articles'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    article::create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'body' => $request->body,
        'img' => $request->hasFile('img')
            ? $request->file('img')->store('img', 'public')
            : 'img/default.jpg',
    ]);

    return redirect()->back()->with('success', 'Articolo ' . $request->title . ' creato con successo!');
}


    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
{
    $article->update([
        'title' => $request->title ?? $article->title,
        'subtitle' => $request->subtitle ?? $article->subtitle,
        'body' => $request->body ?? $article->body,
        'img' => $request->hasFile('img')
            ? $request->file('img')->store('img', 'public')
            : $article->img,
    ]);

    return redirect()->route('article.index')->with('success', 'Articolo ' . $article->title . ' aggiornato con successo!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {

        $article->delete();

        return redirect()->route('article.index')->with('success', 'Articolo ' . $article->title . ' eliminato con successo!');
        
    }
}
