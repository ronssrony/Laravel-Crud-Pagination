<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('style')
</head>
<body class="bg-green-300 ">
    
   <div class="container">
    <nav class="navbar">
    <h1 class=" text-red-300">Logo</h1>
    <div class="menus flex gap-20">
     <button>Profile</button>
     <button>Notification</button>
     <button> <a href="/">Logout</a> </button>
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