<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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