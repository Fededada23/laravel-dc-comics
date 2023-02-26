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
                
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf 
                    @method('PUT')
                    <div class="form-group my-2">
                        <label for="titolo" class="fs-4 my-2">titolo</label>
                        <input  class="form-control" type="text" name="titolo" id="titolo" value="{{old('titolo') ?? $comic->titolo}}">
                        @error('titolo')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="descrizione" class="fs-4 my-2">descrizione</label>
                        <textarea  class="form-control" type="text" name="descrizione" id="descrizione" rows="4" value="{{old('descrizione') ?? $comic->descrizione}}"></textarea>
                        @error('descrizione')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="fs-4 my-2">thumb</label>
                        <input  class="form-control" type="text" name="thumb" id="immagine" value="{{old('thumb') ?? $comic->thumb}}">
                        @error('thumb')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="prezzo" class="fs-4 my-2">prezzo</label>
                        <input  class="form-control" type="text" name="prezzo" id="prezzo" value="{{old('prezzo') ?? $comic->prezzo}}">
                        @error('prezzo')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="serie" class="fs-4 my-2">serie</label>
                        <input  class="form-control" type="text" name="serie" id="serie" value="{{old('serie') ?? $comic->serie}}">
                        @error('serie')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="fs-4 my-2">type</label>
                        <input  class="form-control" type="text" name="type" id="tipo" value="{{old('type') ?? $comic->type}}">
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
