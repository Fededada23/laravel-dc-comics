@extends('layouts.app')
@section('title', 'Laravel | Comics')    
@section('content')

<div class="black-bg">
    <div class="container">
        <div class="row">
            <div class="col-info">
                <h4>Current series</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($comics as $comic)
                <div class="album-card">
                    <a href="/comics/{{$comic['slug']}}">
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
