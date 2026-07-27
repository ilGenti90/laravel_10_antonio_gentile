<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use App\Models\Tag;

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
        $tags = Tag::all();
        return view('article.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // article::create([
    //     'title' => $request->title,
    //     'subtitle' => $request->subtitle,
    //     'body' => $request->body,
    //     'img' => $request->hasFile('img')
    //         ? $request->file('img')->store('img', 'public')
    //         : 'img/default.jpg',
    // ]);

    $article = article::create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'body' => $request->body,
    ]);
      if ($request->file('img')) {
        $article->img = $request->file('img')->store('img', 'public');
        $article->save();
      }

      $article->tags()->attach($request->tags);
       

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
        $tags = Tag::all();
        return view('article.edit', compact('article', 'tags'));
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

    $article->tags()->sync($request->tags);

    return redirect()->route('article.index')->with('success', 'Articolo ' . $article->title . ' aggiornato con successo!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    { 

        $article->tags()->detach();
        $article->delete();

        

        return redirect()->route('article.index')->with('success', 'Articolo ' . $article->title . ' eliminato con successo!');
        
    }
}
