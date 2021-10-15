<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $citas = Citas::all();
        return view('admin.citas.index',['citas'=>$citas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCita=new Citas();
        $newCita->nombre = $request->nombre;
        $newCita->apellido = $request->apellido;
        $newCita->servicio = $request->servicio;
        $newCita->fecha = $request->fecha;
        $newCita->hora = $request->hora;
        $newCita->total = $request->total;
        $newCita->save();   
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit(Citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $citas)
    {
        $cita = Citas::find($citas);
        $cita->nombre = $request->nombre;
        $cita->apellido = $request->apellido;
        $cita->servicio = $request->servicio;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->total = $request->total;
        $cita->save();   
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citas $citas)
    {
        //
    }
    public function delete(Request $request,$citas)
    {
         $cita=Citas::find($citas);
         $cita->delete();   
         return redirect()->back();
    }
}
