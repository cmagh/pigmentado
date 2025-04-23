<nav class="relative text-white md:container md:mx-auto text-xl" id="categoriesMenu">
  <ul class="my-4 p-6 flex items-center gap-8 backdrop-blur-md border-b-4 border-t-4 border-white snap-x overflow-x-auto" id="categoriesCarrousel">
    @foreach ($categories as $item)
      <li class="p-2">
        <a href="#" class="text-center" data-container="{{$item->id}}">
          {!! $item->name !!}
        </a>
      </li>
    @endforeach
  </ul>
</nav>