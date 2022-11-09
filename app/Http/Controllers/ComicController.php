<?php

namespace App\Http\Controllers;

use App\models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validateComicRequest($request, 'store');

        $data = $request->all();

        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        $id = $comic->id;
        return redirect()->route('comics.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validateComicRequest($request, 'update');

        $data = request()->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }



    private function validateComicRequest(Request $request, string $option='store') {
        if($option == 'store') {
            $titleValidation = 'required|string|unique:comics|max:150';
        } else if ($option == 'update') {
            $titleValidation = 'required|string|max:150';
        }

        $request->validate([
            'title' => $titleValidation,
            'series' => 'string|max:150',
            'thumb' => 'url|nullable',
            'type' => 'string|max:50|nullable',
            'price' => 'required|numeric|min:0|max:1000',
            'sale_date' => 'date|nullable',
            'description' => 'string|nullable'
        ]);
    }
}
