<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Categoria;
use App\Models\Imagen;
use Auth;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('publicacion.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacion = new Publicacion();
        $publicacion->id_usuario = Auth::user()->id;
        $publicacion->id_categoria = $request->input('categorias');
        $publicacion->titulo = $request->input('titulo');
        $publicacion->descripcion = $request->input('descripcion');

        if ($publicacion->save()) {
            $uploaded = [];
            $fotos = $request->file('fotos');
            $imagen = new Imagen();
            $imagen->path = $fotos->storeAs('', uniqid().'.'.$fotos->getClientOriginalExtension(), 'public');
            $imagen->id_publicacion = $publicacion->id;
            $imagen->save();
        }

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $usuario = Auth::user();
        $publicacionesArtista = Publicacion::where('id_usuario', $usuario->id)->get();
        $numpublicaciones = count($publicacionesArtista);
        $publicacion = Publicacion::where('id_usuario', $usuario->id)->with('imagenP')->orderBy('created_at','DESC')->take(6);
        return view('artista.perfil', compact('usuario', 'publicacion', 'numpublicaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacion $publicacion)
    {
        //
    }
}
