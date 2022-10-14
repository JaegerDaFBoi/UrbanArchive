<x-app-layout>
    @section('content')
    <div class="wrapper">

        <div class="col-4">
                <img src="{{ asset('assets/img/dibujo.jpg') }}"class="category-img">
                <br>
                <br>
                <a href="{{ route('categorias.mostrar', 1) }}" class="nav-menu-link nav-link nav-menu-link_active" id="category-button">DIBUJO</a>
        </div>

        <div class="col-4">
                <img src="{{asset('assets/img/fotografia.jpg')}}"class="category-img">
                <br>
                <br>
                <a href="{{ route('categorias.mostrar', 2) }}" class="nav-menu-link nav-link nav-menu-link_active" id="button-fot">FOTOGRAFIA</a>
            </form>
        </div>

        <div class="col-4">
                <img src="{{asset('assets/img/manualidades.jpg')}}"class="category-img">
                <br>
                <br>
                <a href="{{ route('categorias.mostrar', 3) }}" class="nav-menu-link nav-link nav-menu-link_active" id="button-man">MANUALIDADES</a>
        </div>
        
        

        <div class="col-4">
                <img src="{{asset('assets/img/pintura.jpg')}}"class="category-img">
                <br>
                <br>
                <a href="{{ route('categorias.mostrar', 4) }}" class="nav-menu-link nav-link nav-menu-link_active" id="category-button">PINTURA</a>
        </div>
        <div class="col-4">
                <img src="{{asset('assets/img/tattoo.jpg')}}"class="category-img">
                <br>
                <br>
                <a href="{{ route('categorias.mostrar', 5) }}" class="nav-menu-link nav-link nav-menu-link_active" id="category-button">TATTOO</a>
        </div>
    </div>
    @endsection
</x-app-layout>