<x-guest-layout>
    @section('content')
    <div class="centrar">
        <main class="row">
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h2>ACCEDER</h2>
                <br><br>
                <!---txt Correo Electronico-->
                <div class="input-field">
                    <label>CORREO ELECTRONICO</label>
                    <input type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!---txt Contraseña-->
                <div class="input-field">

                    <br><label>CONTRASEÑA</label>
                    <input type="password" name="password" required autocomplete="current-password" />
                </div>

                <br>

                <!---Alerta para restablemiento de Contraseña-->

                <br><br>

                <!---Btn Ingresar , Registro -->
                <a class="nav-menu-link nav-link nav-menu-link_active" type="button"
                    href="{{ route('register') }}">REGISTRARSE</a>
                <button class="nav-menu-link nav-link nav-menu-link_active" type="submit">INGRESAR</button>
            </form>

        </main>
    </div>
    @endsection
</x-guest-layout>