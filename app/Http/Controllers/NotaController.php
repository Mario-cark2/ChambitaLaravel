<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App;
use App\Nota;

class NotaController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $usuarioEmail = auth()->user()->email;
        $notas = Nota::where('usuario', $usuarioEmail)->paginate(5);
        return view('notas.lista',compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *cxc
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new Nota();
        $nota->nombre = $request->nombre;
        $nota->descripcion = $request->descripcion;
        $nota->edad = $request->edad;
        $nota->oficio  = $request->oficio;
       
        if($request->hasFile('imagen')){
            $nota['imagen']=$request->file('imagen')->store('uploads','public');

        } 
        
        $nota->usuario = auth()->user()->email;
        $nota->save(); 
        return back()->with('mensaje', 'Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = App\Nota::findOrFail($id);
        return view('notas/edit', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        $notaUpdate->edad = $request->edad;
        $notaUpdate->oficio = $request->oficio; 
        if($request->hasFile('imagen')){
            $notaUpdate = App\Nota::findOrFail($id);
            Storage::delete('public/'.$notaUpdate->imagen); 
            $notaUpdate['imagen']=$request->file('imagen')->store('uploads','public');

        } 
        $notaUpdate->save();
        $notaUpdate = App\Nota::findOrFail($id); 
        return back()->with('mensaje', 'Informacion Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $notaDestroy = App\Nota::findOrFail($id);
        if (Storage::delete('public/'.$notaDestroy->imagen)){
 
            $notaDestroy->delete();
        }
         return back()->with('mensaje', 'Eliminado');
     }
    }
 
