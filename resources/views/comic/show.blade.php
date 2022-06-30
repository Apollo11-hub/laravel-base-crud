@extends('layouts.main')

@section('content')
    <h1>

        <div class="image-container card-o">
            <img src="{{$comic->image}}" alt="{{$comic->type}}">
            <p>{{$comic->title}}</p>
        </div>

        <button type="button" class="btn btn-primary"><a href="{{route('comics.index')}}">Back Home</a></button>

    </h1>
@endsection
