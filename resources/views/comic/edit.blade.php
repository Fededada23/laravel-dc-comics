@extends('layouts.app')
@section('title')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                 {{-- preso da documentazione laravel --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('comics.update', $comics->id)}}" method="POST">
                    @csrf 
                    @method('PUT')
                    <div class="form-group my-2">
                        <label for="title" class="fs-4 my-2">titolo</label>
                        <input  class="form-control" type="text" name="title" id="titolo" value="{{old('title') ?? $comics->title}}">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="description" class="fs-4 my-2">descrizione</label>
                        <textarea  class="form-control" type="text" name="description" id="descrizione" rows="4" value="{{old('description') ?? $comics->description}}"></textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="fs-4 my-2">thumb</label>
                        <input  class="form-control" type="text" name="thumb" id="immagine" value="{{old('thumb') ?? $comics->thumb}}">
                        @error('thumb')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="price" class="fs-4 my-2">prezzo</label>
                        <input  class="form-control" type="text" name="price" id="prezzo" value="{{old('price') ?? $comics->price}}">
                        @error('price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="series" class="fs-4 my-2">serie</label>
                        <input  class="form-control" type="text" name="series" id="serie" value="{{old('series') ?? $comics->series}}">
                        @error('series')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="fs-4 my-2">type</label>
                        <input  class="form-control" type="text" name="type" id="tipo" value="{{old('type') ?? $comics->type}}">
                        @error('type')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="sumbit" class="btn btn-success my-3">Invia</button>
                </form>
            </div>
        </div>
    </div>
@endsection
