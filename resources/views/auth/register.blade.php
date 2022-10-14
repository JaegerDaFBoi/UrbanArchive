<x-guest-layout>
    @section('content')
    <div class="centrar">
        <main class="row">
            <x-jet-validation-errors class="mb-4" />
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h2>REGISTRARSE</h2><br>

                
                <!--Nombre completo y Numero de Celular-->
                <div class="input-field col s6">
                    
                    
                    <label>Nombre Completo</label><input name="name" type="text">
                </div>
                <div class="input-field col s6">
                    
                    
                    <label>Numero de Celular</label><input name="telefono" type="text">
                </div>

                <!--Tipo de Documento y Numero de Documento-->
                <div class="input-field col s6">
                    
                   
                    <label>Tipo de Documento</label> <input name="tipodoc" type="text">
                </div>
                <div class="input-field col s6">
                    
                    
                    <label>Numero de Documento</label><input name="documento" type="number">
                </div>

                <!--Select usuarios Genero--> 
                <div class="col s6">
                    <label>Seleccionar usuario</label>
                    <select class="browser-default" name="role">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1"> Usuario</option>
                        <option value="3">Artista</option>
                    </select>
                </div>
                <div class="col s6">
                    <label>Seleccionar Genero</label>
                    <select class="browser-default" name="genero">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="F"> Femenino</option>
                        <option value="M">Masculino</option>
                        <option value="o">Otros</option>
                    </select>
                </div>

                <!--Correo Electronico y contraseña-->
                <div class="input-field col s6">
                    
                    
                    <label>Correo Electronico</label><input name="email" type="email">
                </div>
                <div class="input-field col s6">
                    
                    
                    <label>Contraseña</label><input name="password" type="password">
                </div>

                <div class="input-field col s6">
                    
                    
                    <label>Confirmar contraseña</label><input name="password_confirmation" type="password" required autocomplete="new-password">
                </div>

                <br><br>
                <!--btn Ingresar y Cancelar-->
                <button href="{{ url('/dashboard') }}" class="nav-menu-link nav-link nav-menu-link_active">CANCELAR</button>
                <button type="submit" class="nav-menu-link nav-link nav-menu-link_active">GUARDAR</button>

            </form>
        </main>
    </div>
    @endsection
</x-guest-layout>
