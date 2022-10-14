<x-app-layout>
    @section('content')
    <div class="centrar">
        <main class="row">
            <form method="post" action="{{ route('publicacion.store') }}" enctype="multipart/form-data" id="frm-registrar">
                @csrf
                <h3>CREAR PUBLICACION</h3>
                <br>
                <label for="name">Categoria</label>
                <br><br>
                <select name="categorias" id="categorias">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                    @endforeach
                </select>
                <br><br>
                <label for="titulo">Titulo</label>
                <input id="titulo" name="titulo" type="text" class="validate">
                <br><br>
                <label for="textarea">Descripcion</label>
                <br>
                <textarea id="textarea" name="descripcion"></textarea>
                <br><br>
                <label for="cargar"> Subir imagen</label>
                <input id="button1" type="file" name="fotos" id="fotos" accept="image/*"><br>
                <br>
                <!---Btn Ingresar , Registro -->
                <button type="submit" name="btn-agregar">Enviar</button>
                
            </form>

        </main>
    </div>
    @endsection
</x-app-layout>