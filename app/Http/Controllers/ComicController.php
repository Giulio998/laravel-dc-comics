<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view("comics.comics", compact("comics"));
    }


    public function create()
    {
        return view("comics.create");
    }

    public function store(Request $request)
    {   
        $form_data = $request->all();
        $new_comic = Comic::create($form_data);
        return to_route('comics.show', $new_comic);
    }
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }
    public function update(Request $request)
    {
        $form_data = $request->validated();
        $newComic = Comic::create($form_data);
        $formdata = $request->all();

        $newComic = new Comic();
        $newComic->title = $formdata['title'];
        $newComic->description = $formdata['description'];
        $newComic->image = $formdata['image'];
        $newComic->price = $formdata['price'];
        $newComic->series = $formdata['series'];
        $newComic->sale_date = $formdata['sale_date'];
        $newComic->type = $formdata['type'];
        $newComic->save();
    }
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics');
    }
}