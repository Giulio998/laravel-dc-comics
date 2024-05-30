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
        <p class="card-text">{{ \Illuminate\Support\Str::limit($comic->description,$limit = 150)}}</p>
      </div>
      <div class="card-footer">
        <p>{{ $comic->type}}</p>
      </div>
      </div>
    </div>
  @endforeach
  </div>
</div>

@endsection