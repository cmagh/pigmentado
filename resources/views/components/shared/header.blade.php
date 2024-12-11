<x-shared.menu-mobile/> 
<header class="bg-pigmen-bg">
  <div class="container mx-auto flex flex-wrap p-4 flex-row items-center justify-between">
    <a href="{{route('home')}}" class="flex items-center w-8 md:w-12 relative">
      <x-logos.3/>
    </a>
    <nav class="hidden md:ml-auto md:flex flex-wrap items-center text-base justify-center text-white">
      @foreach ($menu as $key => $value)
        <a class="mr-5 hover:text-gray-900" href="{{route($value)}}">{{$key}}</a>
      @endforeach
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