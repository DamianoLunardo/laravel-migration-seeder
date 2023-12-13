<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title', 'Treni')</title>
     @vite('resources/js/app.js')
  </head>
  <body>

     <header>
        <h1 class="text-center bg-primary mb-5">
            Benvenuti su TrenDami <br>
            Il tuo treno sempre in ritardo
        </h1>
     </header>

     <main>
     @yield('content')
     </main>

     <footer>
     </footer>
