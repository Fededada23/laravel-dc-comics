<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comic as Comic;
use Illuminate\Support\Facades\Validator;

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
        $icon = config('db.icon');
        $social = config('db.social');
        return view('comic.index', compact('comics', 'icon', 'social'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icon = config('db.icon');
        $social = config('db.social');
        return view('comic.create', compact('icon', 'social'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.show', ['comic' => $newComic-> id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $icon = config('db.icon');
        $social = config('db.social');
        return view('comic.show', compact('comic', 'icon', 'social'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);
        $icon = config('db.icon');
        $social = config('db.social');
        return view('comic.edit', compact('comics', 'icon', 'social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $comic = Comic::findOrFail($id);
        $data = $this->validation($request->all());
        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic-> id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
    //bonus1
    private function validation($data){
        $validator = Validator::make($data, [
            'title'=>'required',
            'description'=>'required',
            'thumb'=>'required',
            'price'=>'required',
            'series'=>'required',
            'type'=>'required',
        ],
        [
            'title.required'=> 'Il titolo è obbligatorio',
            'description.required'=>'La descrizione è obbligatoria',
            'thumb.required'=>'La foto è obbligatoria',
            'price.required'=>'Il prezzo è obbligatorio',
            'series.required'=>'La serie è obbligatoria',
            'type.required'=>'Il tipo è obbligatorio',
        ])->validate();

        return $validator;
    }

}
