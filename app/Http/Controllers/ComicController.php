<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $query = Comic::query();
        if ($search) {
            $query->where('series', 'LIKE', "%$search%");
        }
        $comics = $query->get();
        return view('comics.index', compact('comics', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comic = new Comic();

        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'string',
            'series' => 'required|string',
            'sale_date' => 'date',
            'type' => 'string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
        ]);

        $data = $request->all();

        $comic = new Comic();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];

        $comic->save();

        return to_route('comics.show', $comic->id)
            ->with('type', 'success')
            ->with('message', "'$comic->series' has been successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrfail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'string',
            'series' => 'required|string',
            'sale_date' => 'date',
            'type' => 'string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
        ]);

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];

        $comic->save();

        return to_route('comics.show', $comic->id)
            ->with('type', 'success')
            ->with('message', "'$comic->series' has been successfully edited");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')
            ->with('message', "'$comic->series' has been successfully removed")
            ->with('type', 'success');
    }
}
