@extends('layouts.app')

@section('content')

<div class="container">
  <form action="{{ route('comics.update', $comic) }}" method="POST">

    {{-- Cross Site Request Forgering --}}
    @csrf

    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Titolo della pasta" value="{{ $comic->title }}">
    </div>

    <div class="mb-3">
      <label for="thumb" class="form-label">thumb</label>
      <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{ $comic->thumb }}">
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="text" name="price" class="form-control" id="price" placeholder="" value="{{ $comic->price }}">
    </div>

    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" name="series" class="form-control" id="series" placeholder="" value="{{ $comic->series }}">
    </div>

    <div class="mb-3">
      <label for="sale_date" class="form-label">Date</label>
      <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="" value="{{ $comic->sale_date }}">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione">{{ $comic->description }}</textarea>
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Type</label>
      <input type="text" name="type" class="form-control" id="type" placeholder="" value="{{ $comic->type }}">
    </div>

    <button class="btn btn-primary">Modifica</button>
  </form>
</div>

@endsection