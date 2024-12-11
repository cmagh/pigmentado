<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/styles.css'])
    </head>
    <body>        
      <section class="bg-white dark:bg-gray-900 ">
        <div class="container min-h-screen px-6 py-12 mx-auto flex lg:gap-12 flex-col md:flex-row items-center justify-center">
            <div class="w-full lg:w-1/2">
                <p class="text-sm font-medium text-blue-500 dark:text-blue-400">Error 404</p>
                <h1 class="mt-3 text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">Página no encontrada</h1>
                <p class="mt-4 text-gray-500 dark:text-gray-400">Lo sentimos, la página que estás buscando no existe. Aquí tienes algunos enlaces útiles:</p>
                <div class="flex items-center mt-6 gap-x-3">
                    <a href="javascript:history.back()" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                        <span>Ir atrás</span>
                      </a>
    
                    <a href="{{route('home')}}" class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                        Regresar al inicio
                    </a>
                </div>
            </div>
    
            <div class="relative w-full mt-12 lg:w-1/2 lg:mt-0">
              <div id="animation404"></div>                
            </div>
        </div>
      </section>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.11/lottie.min.js"></script>
    <script>
      var animation = lottie.loadAnimation({
          container: document.getElementById('animation404'), // El contenedor donde se mostrará la animación
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: "{{ asset('animations/animation-4043.json') }}" // Ruta al archivo JSON de la animación
      });
  </script>
</html>

