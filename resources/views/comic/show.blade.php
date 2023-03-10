@extends('layouts.app')
@section('title')
@section('content')
<div class="bg-blue">
    <div class="container">
        <div class="row p-5">
            <div class="col">
                <div class="card-img">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p class="type">{{$comic['type']}}</p>
                    <a href="#null">
                        <p>View Gallery</p>
                    </a>
                </div>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{route('comics.edit', ['comic' => $comic['id']])}}">
                    <button type="button" class="btn btn-warning">Modifica</button>
                </a>
                <form action="{{route('comics.destroy', ['comic' => $comic['id']])}}" class="d-inline-block" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger confirm-delete-button" data-title="{{$comic->title}}">Cancella</button>
                </form>
            </div>    
        </div>
    </div>
</div>
<div class="container">
    <div class="row d-flex justify-content-between align-items-center p-5">
        <div class="col-60">
            <div class="pb-3">
                <h2>{{($comic['title'])}}</h2>
            </div>
            <div class="container-info pb-4">
                <div class="row d-flex align-items-center">
                    <div class="col-70">
                        <div class="row-mini d-flex">
                            <div class="col d-flex">
                                <p>U.S. Price:</p><span class="text-white fw-semibold">{{($comic['price'])}}</span>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <p>AVAILABLE</p>
                            </div>
                        </div>                 
                    </div>
                    <div class="col-30 d-flex justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle  fw-semibold" href="#null" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Check Availability
                              </a>
                              <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item border-0 p-2" href="#null">hey</a></li>
                              </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <p>{{$comic['description']}}</p>
            </div>
        </div>
        <div class="col-40 d-flex justify-content-end">
            <div class="content">
                <div class="d-flex justify-content-end">
                    <h5>advertisement</h5>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/images/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-gray">
    <div class="container">
        <div class="row p-5">
            <div class="col">
                <div>
                    <h4>Talent</h4>
                </div>
                <div class="first-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>Art by:</p> 
                    </div>
                    <div class="col-70">
                        <a href="#null"> {{$comic['artists']}} </a>
                    </div>
                </div>
                <div class="second-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>Written by:</p> 
                    </div>
                    <div class="col-70">
                        <a href="#null"> {{$comic['writers']}} </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <h4>Specs</h4>
                </div>
                <div class="first-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>Series:</p> 
                    </div>
                    <div class="col-70">
                        <a href="#null"> {{$comic['series']}} </a>
                    </div>
                </div>
                <div class="second-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>U.S. Price:</p> 
                    </div>
                    <div class="col-70">
                        <p>{{($comic['price'])}}</p>
                    </div>
                </div>
                <div class="second-line d-flex justify-content-between align-self-baseline">
                    <div class="col-30">
                        <p>On Sale Date:</p> 
                    </div>
                    <div class="col-70">
                        <p>{{($comic['sale_date'])}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

