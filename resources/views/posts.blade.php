@extends('layouts.layout')
@section('content')

    <!-- Contenido -->
    <section class="container-fluid content">
    
        <section>
            <div class="img-padre">
                <img src="{{asset('images/calido.png')}}" alt="">
                <div class="img-hijo">
                    <p>DYNASTY CLUB</p>
                    <p class="descripcion">Spa enfocado en ofrecer tranquilidad y
                       relajación para el cuidado corporal
                    </p>
                </div>
            </div>
            
            
            <div class="servicios" data-aos="fade-up" data-aos-duration="3000">
                <p class="titulo-serv" >Nuestros servicios</p>
                <div class="flex-serv">
                    <div class="icono">
                        <img src="{{asset('images/iconos/uñas.jpg')}}" alt="">
                    </div>
                    <a href="#" class="op text-serv"> <p>Uñas</p> </a> 
                    <div class="icono">
                        <img src="{{asset('images/iconos/pestaña.jpg')}}" alt="">
                    </div>
                    <a href="#" class="op text-serv"> <p>Pestañas</p> </a> 
                    <div class="icono">
                        <img src="{{asset('images/iconos/micro.jpg')}}" alt="">
                    </div>
                    <a href="#" class="op text-serv"> <p>Microblanding</p> </a>
                    <div class="icono">
                        <img src="{{asset('images/iconos/paquete.jpg')}}" alt="">
                    </div>
                    <a href="#" class="op text-serv"> <p>Paquetes</p> </a>
                    <div class="icono">
                        <img src="{{asset('images/iconos/pies.jpg')}}" alt="">
                    </div>
                    <a href="#" class="op text-serv"> <p>Spa pedicure</p> </a>
                    <div class="icono">
                        <img src="{{asset('images/iconos/labios.jpg')}}" alt="">
                    </div>
                 <a href="#" class="op text-serv"> <p >Labios</p> </a>
                </div>
            </div>
           
            <div class="sucursales" data-aos="fade-up"
            data-aos-duration="3000" id="sucursales">
             <p class="title">Nuestras sucursales</p>
               <div class="flex-s">
                <div class="card-sucur">
                        <!-- <img class="img-sucur" src="" alt=""> -->
                        <iframe class="img-sucur" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.6266742188923!2d-99.21573388543209!3d19.68592643763315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21face26aa9d3%3A0xc4313edd61bcc2d2!2s%E2%AD%90%20Dynasty%20Club%20NailBar%20%7C%20Microblading%2C%20Pesta%C3%B1as%2C%20U%C3%B1as%2C%20Spa%20Manicure%2C%20Spa%20Pedicure%2C%20BB%20Glow%2C%20Hilos%20Tensores%2C%20%C3%81cido%20Hialur%C3%B3nico%20y%20m%C3%A1s%20%E2%AD%90!5e0!3m2!1ses-419!2smx!4v1621646640410!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <p class="texto">Plaza las haciendas, Ex Hacienda de 
                            San Miguel, 54715 Cuautitlán Izcalli, Méx.
                        </p>
                    </div>
                    <div class="card-sucur">
                        <!-- <img class="img-sucur" src="" alt=""> -->
                        <iframe class="img-sucur" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.156060917881!2d-99.1358779854348!3d19.491920443832807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9a54f94469f%3A0x1ef7514fb471493e!2sPlaza%20Lindavista!5e0!3m2!1ses-419!2smx!4v1621646722810!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <p class="texto">Proximamente en Plaza Linda vista.
                        </p>
                    </div>
               </div>
            </div>
            <br>
           
            <br><br>
            
           <!--  data-aos="fade-up"
            data-aos-duration="3000" -->
            <div class="info-equipo" >
            <div> <p class="titulo-equip">Nuestro equipo de trabajo</p> </div>
                <div class="flex-equipo">
                <div class="equipo">
                    <div class="img-perfil">
                        <img class="img-perfil" src="{{asset('images/girl-01.jpg')}}" alt="">
                   </div>
                   <div class="nombre">
                        <p>Avelina Navarrete</p>
                   </div>
                   <div class="trabajo">
                        <p>Uñas - Microblanding</p>
                   </div>
                   <div class="horario">
                       <iconify-icon class="calendar" data-icon="akar-icons:calendar"></iconify-icon>
                       <p class="dia">Miercoles - Jueves</p>
                       <iconify-icon class="reloj" data-icon="emojione-monotone:nine-oclock"></iconify-icon>
                       <p class="hora">9:00 - 15:00 hrs</p>
                   </div>
                    
                </div>
                <div class="equipo">
                    <div class="img-perfil">
                        <img class="img-perfil" src="{{asset('images/girl-02.jpg')}}" alt="">
                   </div>
                   <div class="nombre">
                        <p>Avelina Navarrete</p>
                   </div>
                   <div class="trabajo">
                        <p>Uñas - Microblanding</p>
                   </div>
                   <div class="horario">
                        <iconify-icon class="calendar" data-icon="akar-icons:calendar"></iconify-icon>
                        <p class="dia">Miercoles - Jueves</p>
                        <iconify-icon class="reloj" data-icon="emojione-monotone:nine-oclock"></iconify-icon>
                        <p class="hora">9:00 - 15:00 hrs</p>
                   </div>       
                </div>
                <div class="equipo">
                    
                    <div class="img-perfil">
                         <img class="img-perfil" src="{{asset('images/girl-03.jpg')}}" alt="">
                    </div>
                       
                    
                   <div class="nombre">
                        <p>Avelina Navarrete</p>
                   </div>
                   <div class="trabajo">
                        <p>Uñas - Microblanding</p>
                   </div>
                   
                   <div class="horario">
                        <iconify-icon class="calendar" data-icon="akar-icons:calendar"></iconify-icon>
                        <p class="dia">Miercoles - Jueves</p>
                        <iconify-icon class="reloj" data-icon="emojione-monotone:nine-oclock"></iconify-icon>
                        <p class="hora">9:00 - 15:00 hrs</p>
                  </div>
                </div>
                </div>
            </div>
        </section>
        <div class="mt-1 mb-2 text-center" style="justify-content: center;align-items: center;display: flex;">
            <div style="position: relative;width: auto;height: 400px;"></div>
        </div>
    </section>
@stop
  