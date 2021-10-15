@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles-02.css')}}">
<section>
    <div class="contenedor">
        <nav class="nav">
            <p>Uñas</p>
            <p>Pestañas</p>
            <p> Spa</p>
            <p>Labios</p>
            <p>Maquillaje</p>
            <p>Paquetes</p>
        </nav>
        <section class="contenido">
         @foreach($servicios as $servicio)
            <div class="tarjetas">
                <img src="{{asset($servicio->name_img)}}" alt="{{$servicio->title}}" class="img">
                <!-- <p class="titulo">Manicure</p> -->
                <label class="titulo" for="servicio"> {{ $servicio->alias }} </label> 
		        {{-- <input type="checkbox" name="servicio[]" value="manicure" id="servicio" > --}}
                <div class="precio-tiempo">
                    <p>$ {{ $servicio->costo }}</p>
                    <p>{{ $servicio->tiempo }}</p>
                </div>
                <div class="botones">
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Detalles                        </button>
                        <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;">
                            <p>
                                {{ $servicio->desc_serv }}
                            </p>
                        </div>
                    </div>
                   {{--  <button class="agregar">Agregar</button> --}}
                    {{-- <button type="button" class="btn btn-outline-warning">Agregar</button> --}}
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Agregar                        </button>
                        <div class="dropdown-menu p-4 text-muted" style="max-width: 200px;">
                            <p>
                                {{ $servicio->costo }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
           {{--  <div class="tarjetas">
                <img class="img" src="{{asset('images/uñas2.jpg')}}" alt="">
                <label class="titulo" for="servicio"> Uñas poligel </label> 
                <div class="precio-tiempo">
                    <p>$120</p>
                    <p>60 min</p>
                </div>
                <div class="botones">
                    <button class="detalles">Detalles</button>
                    <button class="agregar">Agregar</button>
                </div>
            </div> --}}
           {{--  <div class="tarjetas">
                <img class="img" src="{{asset('images/uñas3.jpg')}}" alt="">
                <label class="titulo" for="servicio"> acrilico </label> 
                <div class="precio-tiempo">
                    <p>$150</p>
                    <p>60 min</p>
                </div>
                <div class="botones">
                    <button class="detalles">Detalles</button>
                    <button class="agregar">Agregar</button>
                </div>
            </div> --}}
        </section>
        <aside class="formulario">
        <form action ="registro.php" method="POST" style="margin-left: 64px;">
                <p class="titulo-cita">Agendar cita</p>
               {{--  <p class="servicios">Tus Servicios</p> --}}
           {{--  <select class="datos-cliente" name="servicio"  id="servicio">
                <option value="Manicure">Manicure </option>
                <option value="Uñas-poligel">Uñas poligel </option>
                <option value="Acrilico">Acrilico </option>
            </select> --}}
            <p> <b>Uñas poligel.....    $120  </b></p>
            <p> <b>Manicure.....    $320  </b></p>
                <p class="horario">Horario</p>
          
            
                <div class="fecha-hora">
                    
                    <input style="width: 162px;" class="fecha" type="date" placeholder="aaaa/dd/mm" name="fecha">
                    <input style="width: 162px;" class="hora" type="time" placeholder="ingrese hora 13:00" name="hora">
                </div>
                <p class="dato">Datos del cliente</p>
                <div class="datos-cliente">
                    <input class="nom" type="text" placeholder="ingrese el nombre" name="nombre">
                    <input class="apellido" type="text" placeholder="ingrese el apellido" name="apellido">
                    <input class="tel" type="text" placeholder="ingrese el telefono" name="telefono">
                </div>
                <div class="precios">
                    <p class="total">Total</p>
                    <p class="precio">$440</p>
                </div>
                <input class="btn-cita" type="submit" value="Confirmar cita" name="guardar">
                <!-- <button class="btn-cita">Confirmar cita</button> -->
            </form>
            
        </aside>
    </div>
 </section>

@stop
   
  
    
