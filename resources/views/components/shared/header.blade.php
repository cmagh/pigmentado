<x-shared.menu-mobile/> 
<header class="bg-pigmen-bg" id="headerMenu">
  <div class="container mx-auto flex flex-wrap p-4 flex-row items-center justify-between">
    <a href="{{route('home')}}" class="flex items-center w-8 md:w-12 relative">
      <x-logos.3/>
    </a>
    <nav class="hidden md:ml-auto md:flex flex-wrap items-center text-base justify-center text-white">
      <ul class="flex ">
        @foreach ($menu as $key => $value)
          <li class="px-4 py-2 {{ request()->routeIs($value) ? 'bg-pigmen-cyan text-pigmen-bg' : ''}}">
            <a href="{{route($value)}}">{{$key}}</a>
          </li>
        @endforeach
        <li class="px-4 py-1">
          <button>
            <x-icons.cart w="6"/>
          </button>  
        </li>
      </ul>
    </nav>
    <button class="md:hidden relative w-8 h-7" id="menuMobileButton">
      <div class="hamburgerLines top-0 w-8 h-7 flex flex-col justify-between absolute">
        <span class="block w-full h-1 bg-white rounded line1"></span>
        <span class="block w-full h-1 bg-white rounded line2"></span>
        <span class="block w-full h-1 bg-white rounded line3"></span>
      </div>
    </button>
  </div>
</header>
<section class="bg-pigmen-bg">
  <div class="container mx-auto flex p-4 items-center justify-between">
    <div class="text-white"><x-shared.searcher-bar/></div>
    <div class="text-white">¡Hoy es un buen día para empezar!</div>
    <div class="text-white">{{ $fecha->translatedFormat('j \d\e F \d\e Y') }}</div>    
  </div>
</section>