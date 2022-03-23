@extends('layout/main')

@section('content')
<div class="container">
  

  <form class="row g-3" method="post" action="{{route('comics.store')}}">
    @csrf
    <div class="col-md-6">
      <label for="description" class="form-label">titolo</label>
      <input type="text" class="form-control" id="description" name="title" required min="1" >
    </div>
    <div class="col-md-6">
      <label for="title" class="form-label" >Descrizione</label>
      <textarea type="text" class="form-control" id="title" name="description"  required></textarea>
    </div>
    <div class="col-md-6">
      <label for="thumb" class="form-label">url copertina</label>
      <input type="text" class="form-control" id="thumb" name="thumb" required>
    </div>
    
    <div class="col-12">
      <label for="price" class="form-label">Prezzo</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" step='0.01' min="1" max="9999">
    </div>
    <div class="col-md-6">
      <label for="inputserie" class="form-label">Serie</label>
      <input type="text" class="form-control" id="inputserie" name="series" required>
    </div>
    
    <div class="col-md-2">
      <label for="inputdate" class="form-label">Data pubblicazione</label>
      <input type="date" class="form-control" id="inputdate" name="sale_date" required>
    </div>
    <div class="col-md-2">
      <label for="inputtype" class="form-label">Tipo</label>
      <input type="text" class="form-control" id="inputtype" name="type" required>
    </div>
    
    <div class="col-12">
      <button type="reset" class="btn btn-secondary">Cancella</button>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Aggiungi fumetto</button>
    </div>
  </form>
</div>
  @endsection