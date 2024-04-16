<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footerLinks = config("db.footerLinks");
        $socials = config("db.socials");
        $comics = Comic::all();

        return view('comics/index', compact('footerLinks', 'socials', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $footerLinks = config("db.footerLinks");
        $socials = config("db.socials");

        return view('comics.create', compact('footerLinks', 'socials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        // richiamo la funziona per validare la richiesta
        // $this->validation($request->all());

        $newComic = new Comic();

        $newComic->fill($request->all);
        $newComic->sale_date = $request->sale_date;


        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $footerLinks = config("db.footerLinks");
        $socials = config("db.socials");
        // dd($comic);
        return view('comics.show', compact('footerLinks', 'socials', 'comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $footerLinks = config("db.footerLinks");
        $socials = config("db.socials");

        return view('comics.edit', compact('footerLinks', 'socials', 'comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {

        // richiamo la funziona per validare la richiesta
        // $this->validation($request->all());

        $comic->update($request->all());
        $comic->sale_date = $request->sale_date;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

}
