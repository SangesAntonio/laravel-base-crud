@extends('layout.main')

@section('content')
<div class="container">

    <form class="row g-3" method="POST" action="{{route('comics.update', $comic->id)}}">
        @method('PUT')
        @csrf
        <div class="col-md-6">
            <label for="description" class="form-label">titolo</label>
            <input type="text" class="form-control" id="description" name="title" value="{{$comic->title}}" required>
        </div>
        <div class="col-md-6">
            <label for="title" class="form-label" >Descrizione</label>
            <input type="text" class="form-control" id="title" name="description" value="{{$comic->description}}" required>
        </div>
        <div class="col-md-6">
            <label for="thumb" class="form-label">url copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}" required>
        </div>
        
        <div class="col-12">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" step='0.01' value="{{$comic->price}}" required>
        </div>
        <div class="col-md-6">
            <label for="inputserie" class="form-label">Serie</label>
            <input type="text" class="form-control" id="inputserie" name="series" value="{{$comic->series}}" required>
        </div>
        
        <div class="col-md-2">
            <label for="inputdate" class="form-label">Data pubblicazione</label>
            <input type="date" class="form-control" id="inputdate" name="sale_date" value="{{$comic->sale_date}}" required>
        </div>
        <div class="col-md-2">
            <label for="inputtype" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="inputtype" name="type" value="{{$comic->type}}" required>
        </div>
        
        <div class="col-12">
            
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Conferma Modifiche</button>
        </div>
    </form>
</div>


@endsection