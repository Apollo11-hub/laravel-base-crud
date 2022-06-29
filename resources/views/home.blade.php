@extends('layouts.main')

@section('content')
<main>
    <div class="jumbo"></div>
      <p class="current-series-special-div">current series</p>
    <div class="container">


            @foreach ($comics as $comic )

            <div class="image-container card-o">
                <img src="{{$comic->image}}" alt="{{$comic->type}}">
                <p>{{$comic->title}}</p>
            </div>

            @endforeach


    </div>
  </main>
@endsection
