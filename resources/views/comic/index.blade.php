@extends('layouts.main')

@section('content')
<main>
    @if(session('prodotto_cancellato'))
        <div class="alert alert-success" role="alert">
            {{ session('prodotto_cancellato') }}
        </div>
    @endif
        @foreach ($comics as $comic )

            <div class="image-container card-o">
                <img src="{{$comic->image}}" alt="{{$comic->type}}">
                <p>{{$comic->title}}</p>
            </div>
                <div>
                    <button type="button" class="btn btn-primary"><a href="{{route('comics.show', $comic)}}">Show</a></button>
                    <button type="button" class="btn btn-success"><a href="{{route('comics.edit', $comic)}}">Edit</a></button>
                    <form
                    onsubmit="return confirm('confermi l\'eliminazione di: {{ $comic->title }}?')"
                    action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" >DELETE</button>
                </form>
                </div>
            @endforeach



    </div>
  </main>
@endsection
