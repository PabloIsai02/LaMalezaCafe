@extends('layouts.main')

@section('title', 'Landing Page')

@section('menu')
<!-- Barra de Navegación -->
<nav id= "menu" class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('image/GT.png') }}" class="images" alt="..." height="36">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                    Trabajos
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#servicios">Servicios</a></li>
                    <li><a class="dropdown-item" href="#reparaciones">Reparaciones</a></li>
                    <li><a class="dropdown-item" href="#modificaciones">Modificaciones</a></li>
                </ul>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="#contacto">Contactanos</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
            data-bs-toggle="dropdown" aria-expanded="false">
            Account
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registro</a></li>
        </ul>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('content')
<!-- Carrusel de Imágenes -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">         
<div class="carousel-inner">             
        <div class="carousel-item active">                
            <div class="d-flex justify-content-between">                     
                <img src="{{ asset('image/A10.jpg') }}" class="custom-image" alt="Imagen 1">
                <img src="{{ asset('image/A8.jpg') }}" class="custom-image" alt="Imagen 2">
                <img src="{{ asset('image/A2.jpg') }}" class="custom-image" alt="Imagen 3">
            </div>            
        </div>             
        <div class="carousel-item">                 
            <div class="d-flex justify-content-between">                     
                <img src="{{ asset('image/A4.jpg') }}" class="custom-image" alt="Imagen 4">
                <img src="{{ asset('image/A1.jpg') }}" class="custom-image" alt="Imagen 5">
                <img src="{{ asset('image/A6.jpg') }}" class="custom-image" alt="Imagen 6"> 
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Encabezado con Jumbotron -->
<header class="jumbotron text-center" style="font-family: 'Playfair Display', cursive;">
    <h1 class="display-4">Gara Customs</h1>
    {{-- <p class="lead">Tenemos lo que tu auto necesita</p>
    <h6>SERVICIOS, REPARACIONES, MODIFICACIONES,</p> --}}
</header>


<!-- Carrusel de Opciones -->
<div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="image-container">
                <img src="{{ asset('image/A7.jpg') }}" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="text-container">
                <h5>Servicios</h5>
                <p>• El taller Gara se especializa en ofrecer servicios de mantenimiento y reparación de vehículos.<br> 
                    Proporciona una amplia gama de servicios,que van desde cambios de aceite, revisión de frenos,<br> 
                    alineación de ruedas, hasta reparaciones más complejas del motor y sistemas eléctricos.</p>
                
            </div>
        </div>
        <div class="carousel-item">
            <div class="image-container">
                <img src="{{ asset('image/A3.jpg') }}" class="d-block w-100" alt="Imagen 4">
            </div>
            <div class="text-container">
                <h5>Reparaciones</h5>
                <p>• 
                    Las reparaciones realizadas en el taller Gara, al ser un taller de autos, <br>
                    abarcan una amplia gama de servicios relacionados con la mecánica automotriz. <br>
                    Estos servicios pueden incluir desde mantenimiento básico, como cambios de aceite,<br> 
                    hasta reparaciones más complejas en el sistema de frenos, suspensión, <br>
                    transmisión, motor y otros componentes esenciales de los vehículos.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="image-container">
                <img src="{{ asset('image/A9.jpg') }}" class="d-block w-100" alt="Imagen 4">
            </div>
            <div class="text-container">
                <h5>Modificaciones</h5>
                <p>• En el taller Gara se realizan modificaciones para mejorar el rendimiento y la estética de los autos, 
                    como la instalación de turbos y ajustes para potenciar el motor. <br>
                    También se llevan a cabo cambios estéticos, como personalización de la carrocería y pintura, <br>
                    para realzar la apariencia del vehículo. </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Secciones Promocionales -->
<section id="servicios" class="container-fluid section-container">
    <!-- Sección 1 -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="image-container2">
                <img src="{{ asset('image/A5.jpg') }}" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="text-container2">
                <h5>Servicios</h5>
                <div class="scrollable-list">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reparaciones" class="container-fluid section-container2">
    <!-- Sección 2 -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="image-container3">
                <img src="{{ asset('image/Taller.jpeg') }}" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="text-container3">
                <h5>Reparaciones</h5>
                <div class="scrollable-list">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="modificaciones" class="container-fluid section-container">
    <!-- Sección 3 -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="image-container2">
                <img src="{{ asset('image/M1.jpg') }}" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="text-container2">
                <h5>Modificaciones</h5>
                <div class="scrollable-list">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contenedor de la sección de contacto -->
<div id="contacto" class="main-container">
    <!-- Mitad izquierda con información de contacto -->
    <div class="left-half">
        <div class="contact-image">
            <img src="{{ asset('image/GT1.png') }}" alt="Imagen de contacto" height="36">
        </div>
        <h2>Información de Contacto</h2>
        <p><strong>Lugar:</strong> Avenida Automotriz #123, Distrito de Mantenimiento</p>
        <p><strong>Horario:</strong> Lunes a Viernes: 8:00 AM - 6:00 PM <br> Sábados: 9:00 AM - 1:00 PM</p>
        <p><strong>Teléfono:</strong> (555) 123-4567</p>
        <p><strong>Correo:</strong> info_gara@gmail.com</p>
    </div>
    <!-- Mitad derecha con formulario de contacto -->
    <div class="center-half">
        <h2>Contacto</h2>
        <form class="contact-form">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo">
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Celular:</label>
                <input type="tel" class="form-control" id="celular" placeholder="Ingrese su número de celular">
            </div>
        </form>
        <form class="buton" onsubmit="mostrarToast(event)">
            <button type="submit" class="btn btn-primary" style="background-color: #212529">Enviar</button>
        </form>
        
        <div id="miToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                ¿Los datos introducidos son correctos?
                <div class="mt-2 pt-2 border-top">
                    <button type="button" class="btn btn-primary btn-sm" onclick="realizarAccion()">Si</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Tercera parte (derecha) para descargar la aplicación -->
    <div class="right-half">
        <h2 style="color:#212529">Descarga nuestra App</h2>
        <!-- Espacio para el logo de la App -->
        <a href="https://www.instagram.com/javie.ber?igsh=NzY5M3kwd2x2YW05&utm_source=qr">
            <div class="app-logo">
                <img src="{{ asset('image/GTLO.png') }}" alt="Logo de la App" width="100" height="100">
            </div>
        </a>
    </div>
</div>

<!-- Pie de página -->
<footer class="text-center p-4 text-white" style="background-color: #212529">
    <p>© [2024] Derechos de autor. Desarrollado por 
        <a href="https://www.instagram.com/javie.ber?igsh=NzY5M3kwd2x2YW05&utm_source=qr" 
        style="color: #ECB347;">[Javier Romo]</a>. Todos los derechos reservados. 
        El contenido, diseño y elementos visuales de este sitio web están protegidos por las leyes de derechos de autor. 
        Queda prohibida la reproducción, distribución o modificación sin autorización previa por escrito. 
        Cualquier uso no autorizado constituye una violación de los derechos de autor y estará sujeto a las acciones 
        legales correspondientes.Todos los derechos reservados.</p>
</footer>
@endsection 
