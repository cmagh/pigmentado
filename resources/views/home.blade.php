<x-layouts.main>
  <x-shared.header/>
  <x-shared.hero/>
  <section>
    <div class="container mx-auto flex flex-col">
      <h3>LO MÁS BUSCADO...</h3>
      <div class="flex gap-4">
        @foreach($mostWanted as $m)
          <div class="flex flex-col">
            <div class="flex w-64 h-96 bg-slate-200 rounded-3xl overflow-hidden">
              @if(is_array($m->img))
                <div class="flex items-center">
                  @isset($m->text)
                    <div class="inline-block">
                      <div class="[writing-mode:vertical-rl] rotate-180 whitespace-nowrap  inline-block text-pigmen-purple text-4xl font-bold mx-2">
                        {{$m->text}}
                      </div>
                    </div>
                  @endisset       
                    <div class="flex flex-col p-2">
                      @foreach($m->img as $img)
                        <img src="{{$img}}" alt="{{$m->title}}" class="m-3">
                      @endforeach
                    </div>       
                </div>
              @else
                <img src="{{asset($m->img)}}" alt="{{$m->title}}" class="object-cover w-full h-full">
              @endif              
            </div>
            <span>{{$m->title}}</span>
          </div>
        @endforeach
      </div>
      
    </div>
  </section>


  <x-shared.footer/>  
</x-layouts.main>