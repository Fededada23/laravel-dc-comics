<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic as Comic;

class ComicController extends Controller
{

    public function index(){
        $comics = Comic::all();
        $icon = config('db.icon');
        $social = config('db.social');
        return view('index', compact('comics', 'icon', 'social'));

    }

    public function detailComics($slug){
        $comics = Comic::where('slug', $slug)->get();
        $comics = $comics[0];
        $single = [
            'single' => $comics
        ];
        $icon = config('db.icon');
        $social = config('db.social');
        return view('detail_comics', compact( 'comics', 'single', 'icon', 'social'));

    }


}
