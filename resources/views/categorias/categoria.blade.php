<x-app-layout>
    @section('content')
    <main>
        <center><h2 style="font-size: 44px;" class="category-title">✠ {{ $categoria->name }} ✠</h2></center>
        <div class="grid-container">
            @foreach ($imagenes as $key => $imagen)
            <div class="grid-item {{ (rand(1,9) == 2) ? 'tall' : '' }} {{(rand(1,5) == 3) ? 'wide' : ''}}"
                style="background-image: url({{ asset('storage/'.$imagen->path) }})">
            </div>
            @endforeach
        </div>
    </main>
    @endsection
</x-app-layout>