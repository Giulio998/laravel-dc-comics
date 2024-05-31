@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-auto ms-auto mb-3">
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Nuovo Fumetto</a>
  </div>
  <div class="row">
    @foreach ($comics as $comic)
    <div class="col-4">
      <div class="card" style="width: 18rem;">
      <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></h5>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($comic->description, $limit = 100)}}</p>
        <p>{{ $comic->series}}</p>
        <p>{{ $comic->type}}</p>
        <form class="comics-delete-form" action="{{ route('comics.destroy', $comic) }}" method="POST">
      @method('DELETE')
      @csrf

      <button type="submit" class="btn btn-link link-danger">Trash</button>

      <div class="d-none modal-delete">
      <h5>Sei sicuro di voler eliminare?</h5>
      <button class="btn-yes">si</button>
      <button class="btn-no">no</button>
      </div>
    </form>
      </div>
      <div class="card-footer">
        <p>{{ $comic->price}}</p>
        <p>{{ $comic->sale_date}}</p>
      </div>
      </div>
    </div>
    
  @endforeach 
  </div>
</div>

@endsection