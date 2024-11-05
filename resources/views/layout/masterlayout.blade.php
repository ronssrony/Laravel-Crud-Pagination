<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @stack('style')
</head>
<body class="bg-green-300 ">
    
   <div class="container">
    <nav class="navbar">
    <h1 class=" text-red-300">LARAVEL </h1>
    <div class="menus flex gap-20">
     <button>About</button>
     <button>Contact</button>
     <button>Login</button>
    </div>
      </nav>

      <main>
     @yield('content') 
       </main>

      <footer class="">

      </footer>
   </div>

 @stack('script')
</body>
</html>