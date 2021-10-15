<?php

namespace App\Http\Controllers;

use App\Models\Sucursales;
use Illuminate\Http\Request;

class SucursalesController extends Controller
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
        $sucursales = Sucursales::all();
        return view('admin.sucursales.index',['sucursales'=>$sucursales]);
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
        $newSucursal=new Sucursales();
        $newSucursal->alias = $request->alias;
        $newSucursal->direc = $request->direc;
        $newSucursal->telefono = $request->telefono;
        $newSucursal->horario = $request->horario;
        $newSucursal->save();   
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursales $sucursales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursales $sucursales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sucursales)
    {
        $sucursal = Sucursales::find($sucursales);
        $sucursal->alias = $request->alias;
        $sucursal->direc = $request->direc;
        $sucursal->telefono = $request->telefono;
        $sucursal->horario = $request->horario;
        $sucursal->save();   
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursales $sucursales)
    {
        //
    }
    public function delete(Request $request,$sucursales)
    {
         $sucursal=Sucursales::find($sucursales);
         $sucursal->delete();   
         return redirect()->back();
    }
}
