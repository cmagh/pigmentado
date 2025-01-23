
<footer class="body-font">
  <div class="bg-pigmen-bg">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10 px-8">
        <a href="{{route('home')}}" class="flex title-font font-medium items-center md:justify-start justify-center text-pigmen-blue">
          <x-logos.1/>
        </a>
      </div>
      <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-pigmen-blue tracking-widest text-lg mb-3">Información de contacto</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">First Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Second Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Third Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-pigmen-blue tracking-widest text-lg mb-3">Sitios de interés</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">First Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Second Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Third Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-pigmen-blue tracking-widest text-lg mb-3">Nuestros Servicios</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">First Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Second Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Third Link</a>
            </li>
            <li>
              <a class="text-pigmen-cyan hover:text-pigmen-green">Fourth Link</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© {{date('Y')}} Pigmentado</p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
          <x-icons.facebook w="5" h="5"/>
        </a>
        <a class="ml-3 text-gray-500">
          <x-icons.whatsapp w="5" h="5"/>
        </a>        
      </span>
    </div>
  </div>
</footer>

<nav class="sticky bottom-0 px-6 py-3 w-full flex items-center md:hidden justify-around bg-white shadow-footer-menu footerMenu" id="footerMenu">  
  <a href="{{route('home')}}" class="text-xs flex flex-col items-center">
    <x-icons.home w="6" h="6"/>
    Inicio
  </a>
  <a href="tel:{{$redes['Whatsapp']['link']}}" class="text-xs flex flex-col items-center">
    <x-icons.phone w="6" h="6"/>
    Teléfono
  </a>
  <span class="bg-pigmen-bg p-2 rounded-lg">
    <x-logos.3 w="6" h="6"/>
  </span> 
  <a href="https://wa.me/{{$redes['Whatsapp']['link']}}" target="_blank" class="text-xs flex flex-col items-center">
    <x-icons.whatsapp w="6" h="6"/>
    WhatsApp
  </a>
  <a href="" class="text-xs flex flex-col items-center">
    <x-icons.menu w="6" h="6"/>
    Menú
  </a>
</nav>