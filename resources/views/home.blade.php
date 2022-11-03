@extends('template')
@section('title', 'Home')

@section('content')
{{-- @include(public_path('WEBPROG2/resources/css/styles.css')) --}}
@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
    <br><br><br><br>
    <center><h1 style="color: blue ; font-size: 32px">Pokedex</h1></center>

    @foreach ($pokemonData as $pokemon)
    <img src="{{$pokemon->image_url}}" alt="" style="margin-bottom: 4%" > 
    <div style="float: right;">
        <h1 style="margin-right: 24px">{{$pokemon->name}}</h1>
        <h2 style="width: 50%">{{$pokemon->type}}</h2>
        <h2 style="width: 50%;">{{$pokemon->description}}</h2>
    </div>  
    
    
    @endforeach
@endsection