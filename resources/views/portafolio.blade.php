@php
    setlocale(LC_TIME, 'es_ES.UTF-8')
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Portafolio - Pigmentado</title>        
        @vite(['resources/css/styles.css', 'resources/js/web/portfolio.js'])

        {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css"/> --}}
    </head>
    <body class="m-0">      
      <x-portafolio.background/>    
      <div class="sticky flex flex-col h-dvh" id="mainContainer">
        <div class="flex flex-col items-center justify-center relative grow">    
          <x-logos.1 w="64"/>    
          <h1 class="text-white text-4xl mt-10 tracking-widest font-bold">PORTAFOLIO</h1>
        </div>
      
        <x-portafolio.menu :categories="$categories"/>
      </div>
      <section class="md:container md:mx-auto relative flex flex-col" id="categoriesContainer">
        @foreach($categories as $category)
          <div class="gridContainer grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 transition-opacity duration-700 ease-in {{ $loop->first ? 'grid opacity-100' :  'hidden opacity-0'}}" id="{{$category->id}}">
            @foreach($category->files as $file)
              <div class="p-2 bg-white flex items-center justify-center">
                <img src="{{$file}}" alt="{{$file}}">
              </div>
            @endforeach            
          </div>
        @endforeach
      </section>
      <section class="md:container md:mx-auto relative" id="ourClientsContainer">
        <h2>Nuestros Clientes</h2>
        <div>
          
        </div>

      </section>


      {{--
      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      --}}
    </body>
</html>