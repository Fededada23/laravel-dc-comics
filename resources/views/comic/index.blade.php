@extends('layouts.app')
@section('title')    
@section('content')

<div class="black-bg">
    <div class="container">
        <div class="row">
            <div class="col-info">
                <h4>Current series</h4>
            </div>
            <div class="mt-5">
                <a href="{{route('comics.create')}}">
                    <button type="button" class="btn btn-primary">Aggiungi Comics</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($comics as $comic)
                <div class="album-card">
                    <a href="{{route('comics.show', ['comic' => $comic['id']])}}">
                        <div class="card-img">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <h3>{{$comic['series']}}</h3>  
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button><a href="#">Load More</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
