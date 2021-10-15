<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
      
       <img  src="{{asset('images/logo.png')}}" alt="" class="m-0 img-principal img-fluid rounded-circle head02" style="height: 50px; width: auto">
  
        <ul class="navbar-nav menu">
          <li class="nav-item">
            <a class="nav-link active text-menu" aria-current="page" href="/">Dinasty Club</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-menu" href="/formulario">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-menu" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-menu" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false"><span class="iconify" data-icon="topcoat:location" style="color: #b38b17;"></span>Sucursal</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="#">Cuautitlán Izcalli</a></li>
              <li><a class="dropdown-item" href="#">Buena vista</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Contenido -->
    @yield('content')

    <!-- Footer -->
    <footer class="container-fluid footer bg-main">
         <div class="contacto" id="contacto" >
               <!--  <hr class="line"> -->
                <div class="grup-logo">
                    <img class="logo" src="{{asset('images/logo.png')}}" alt="" class="logo">
                    <h3 class="titulo">DYNASTY CLUB</h3>
                </div>
                <div class="redes">
                    <a href="https://www.facebook.com/DynastyClubnailsmicrobladingandmore" target="_blank">
                        <iconify-icon class="icono-redes" data-icon="mdi:facebook"></iconify-icon>Dynasty Club</a>
                </div>
                <div class="redes">
                    <a href="https://www.instagram.com/dynastyclubnailbar_art/?hl=es-la" target="_blank">
                        <iconify-icon class="icono-redes" data-icon="mdi:instagram"></iconify-icon>#dynastyclubnailbar_art</a>
                </div>
                <div class="redes">
                    <a href="#"><iconify-icon class="icono-redes" data-icon="mdi:whatsapp">
                    </iconify-icon>55-87-96-31-42</a>
                </div>
            </div>
    </footer>

</body>
</html>