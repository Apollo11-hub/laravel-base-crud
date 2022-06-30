@extends('layouts.main')

@section('content')
<main>

        @foreach ($comics as $comic )

            <div class="image-container card-o">
                <img src="{{$comic->image}}" alt="{{$comic->type}}">
                <p>{{$comic->title}}</p>
            </div>
                <div>
                    <button type="button" class="btn btn-primary"><a href="{{route('comics.show', $comic)}}">Show</a></button>
                    <button type="button" class="btn btn-success"><a href="{{route('comics.show', $comic)}}">Edit</a></button>
                    <button type="button" class="btn btn-danger"><a href="{{route('comics.show', $comic)}}">Delete</a></button>
                </div>
            @endforeach



    </div>
  </main>
@endsection
