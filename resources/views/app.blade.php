<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Learn2Drive</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="antialiased">
            <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"> <a href="/">
            <span class="ml-3 text-xl" >Learn2Drive </a> </span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href="/schedule" >Schedule</a>
            <a class="mr-5 hover:text-gray-900" href="/courses" >Courses</a>
            <a class="mr-5 hover:text-gray-900" href="/vehicle" >Vehicles</a>
            <a class="mr-5 hover:text-gray-900" href="/aboutus" >About us</a>
            <a class="mr-5 hover:text-gray-900" href="/contact" >Contact us</a>
            </nav>
        </div>
        </header>
        <main class= "max-w-6xl mx-auto">
            @yield('content')
        </main>
    </body>
    
    <footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">

      <span class="ml-3 text-xl">Learn2Drive</span>
    </a>
    </span>
  </div>
    <div class="container px-5 mx-auto flex items-center sm:flex-row flex-col">
    <a class="ml-3 hover:text-gray-900" >Made up Address</a>
   
  </div>
</footer>

</html>
