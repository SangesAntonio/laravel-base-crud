@extends('layout/main')

@section('content')
<div class="container ">
  <div class="card mb-3 " style="width: 18rem;">
    <img src="{{$comic['thumb']}}" class="img-fluid" alt="{{$comic['title']}}">
    <div class="card-body">
      <h5 class="card-title">{{$comic['title']}}</h5>
      <p class="card-text">{{$comic['description']}}</p>
      <p class="card-text">Price: {{$comic['price']}}</p>
      <p class="card-text">In vendita dal: {{$comic['sale_date']}}</p>
    </div>
  </div>
</div>
@endsection