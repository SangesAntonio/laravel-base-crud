@extends('layout/main')

@section('content')
@foreach ($comics as $comic)
<div class="card" style="width: 18rem;">
    <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
    <div class="card-body">
      <h5 class="card-title">{{$comic['title']}}</h5>
      <p class="card-text">{{$comic['description']}}</p>
      <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Go to the comic book</a>
    </div>
    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-info">Modifica</a>
    <form action="{{route('comics.destroy', $comic->id)}}" method="post" >
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">cancella</button>
    </form>
  </div>

  @endforeach
@endsection