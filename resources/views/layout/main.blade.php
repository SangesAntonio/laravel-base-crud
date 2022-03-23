<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
  <div class="container">

    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Home</a>
       
          <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
          <a class="nav-link" href="{{route('comics.create')}}">Aggiungi un nuovo fumetto</a>
        
      </div>
    </div>
  </nav>
  @yield('content')
</div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>