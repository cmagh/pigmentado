<div id="menuBg" class="menuBg w-full h-screen bg-pigmen-bg fixed top-0 left-0 flex justify-center items-center">
  
  <nav id="menuMobileContainer" class="text-white">
    <ul>
      @foreach ($menu as $key => $value)
        <li><a href="{{route($value)}}">{{ $key }}</a></li>          
      @endforeach      
    </ul>
    <ul>
      @foreach ($redes as $key => $value)
        {{-- <li><a href="{{route($value)}}" target="_blank">{{  }}</a></li> --}}          
      @endforeach
    </ul>
  </nav>
</div>