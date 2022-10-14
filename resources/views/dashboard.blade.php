<x-app-layout>
  @section('content')
  <main>
    <div class="grid-container">
      @foreach ($imagenes as $key => $imagen)
        <div class="grid-item {{ (rand(1,9) == 2) ? 'tall' : '' }} {{(rand(1,5) == 3) ? 'wide' : ''}}" style="background-image: url({{ asset('storage/'.$imagen->path) }})">
          
      </div>
      
      @endforeach
    </div>
  </main>
  @endsection
</x-app-layout>