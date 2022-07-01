@extends('layouts.main')

@section('content')
<form action="{{route('comics.store')}}" method="POST">
@csrf

<div class="mb-3">
    <label for="title" class="form-label">Titolo Comic</label>
    {{-- il name dell'input deve corrispondere al nome della colonna della tabella di riferimento --}}
    <input  class="form-control form-control-lg" type="text" id="title" name="title" placeholder="Titolo Comic">
</div>
<div class="mb-3">
    <label for="image" class="form-label">Immagine Url Comic</label>
    {{-- il name dell'input deve corrispondere al nome della colonna della tabella di riferimento --}}
    <input  class="form-control form-control-lg" type="text" id="image" name="image" placeholder="Immagine Url Comic">
</div>
<div class="mb-3">
    <label for="type" class="form-label">Tipo di Comic</label>
    {{-- il name dell'input deve corrispondere al nome della colonna della tabella di riferimento --}}
    <input  class="form-control form-control-lg" type="text" id="type" name="type" placeholder="Tipo di Comic">
</div>
<button type="submit" class="btn btn-warning" data-toggle="button" aria-pressed="false" autocomplete="off">
    SUBMIT
</button>
</form>
@endsection
