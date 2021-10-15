<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicios::all();
        return view('admin.servicios.index',['servicios'=>$servicios]);
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
        $newServicio=new Servicios();
        if($request->hasFile('name_img')){
            $file=$request->file('name_img');
            $destinationPath='images/featureds/';
            $filename=time().'-'.$file->getClientOriginalName();
            $uploadSucess=$request->file('name_img')->move($destinationPath,$filename);
            $newServicio->name_img=$destinationPath.$filename;  
        }
        
        $newServicio->alias = $request->alias;
        $newServicio->desc_serv = $request->desc_serv;
        $newServicio->tiempo = $request->tiempo;
        $newServicio->costo = $request->costo;
        $newServicio->save();   
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicios $servicios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $servicioId)
    {
        $servicio=Servicios::find($servicioId);
        $servicio->alias = $request->alias;
        $servicio->desc_serv = $request->desc_serv;
        $servicio->tiempo = $request->tiempo;
        $servicio->costo = $request->costo;
        if($request->hasFile('name_img')){
            $file=$request->file('name_img');
            $destinationPath='images/featureds/';
            $filename=time().'-'.$file->getClientOriginalName();
            $uploadSucess=$request->file('name_img')->move($destinationPath,$filename);
            $servicio->name_img=$destinationPath.$filename;  
        }
       
        $servicio->save();   
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicios $servicios)
    {
        //
    }
    public function delete(Request $request,$servicioId)
    {
         $servicio=Servicios::find($servicioId);
         $servicio->delete();   
         return redirect()->back();
    }
}
