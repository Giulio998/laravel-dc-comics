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
       
    }

    
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}