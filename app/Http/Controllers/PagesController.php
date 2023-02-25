<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class PagesController extends Controller
{
    public function index(){
        $icon = config('db.icon');
        $social = config('db.social');
        return view('homepage', compact('icon', 'social'));
    }
}
