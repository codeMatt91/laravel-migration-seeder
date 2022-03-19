<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
    <title>My Train || @yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-danger">
            <div class="container">
              <a  href="{{route('home')}}">              
                  <img class="img-fluid" src="https://www.begear.it/wp-content/uploads/2015/11/Logo-trenitalia.jpg" alt="" width="30" height="24">               
              </a>
            </div>
          </nav>
    </header>
    
    
    @yield('content')
    

</body>
</html>¨