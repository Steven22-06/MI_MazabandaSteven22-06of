<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioweb/css/style.css')}}">
    <meta name="description" content="Servicios de pintura profesional y decoración deportiva. Incluye pintura de canchas deportivas, señalización vial, pintura de interiores y exteriores, entre otros.">
    <meta name="keywords" content="pintura, decoración, pintura deportiva, señalización vial, fachadas, interiores, exteriores, resane, construcción, servicios profesionales">
    <link rel="shortcut icon" href="/asset/img/favicon/imagen3.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @yield('seo')
</head>
<body class="body">
    <header>
        <div class="menu">
            <section> 
                <img class="img" src="{{asset('imagen/'.$empresa->logo)}}" alt="icono de la emplesa">
              
            </section><br>
            <section>
                <input type="checkbox" id="menu-toggle" class="menu-checkbox">
                <label for="menu-toggle" class="menu-toggle">&#9776;</label>
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#carouselExampleIndicators"><i class="fa-solid fa-house fa-beat-fade"></i> Principio</a></li>
                        <li><a href="#MV"><i class="fa-solid fa-arrow-trend-up fa-beat-fade"></i> Misión y Visión</a></li>
                        <li><a href="#Servicios"><i class="fa-solid fa-shop fa-beat-fade"></i> Servicios</a></li>
                        <li><a href="#flex-footer"><i class="fa-solid fa-location-dot fa-beat-fade"></i>  Geolocalización</a></li>
                        <li><a href="#contacto"><i class="fa-solid fa-phone fa-beat-fade"></i> Contacto</a></li>
                        <li><a href="#Redes"><i class="fa-brands fa-facebook fa-beat-fade"></i> Redes Sociales</a></li>
                    </ul>
                </nav>
            </section>
    </header>
    <main>
        @yield('content')
    </main><br><hr><br>
    <footer>
        <section id="flex-footer" class="footer">
           <section>
            <h2><i class="fa-solid fa-location-dot fa-beat-fade"></i> Dirección</h2><br>
                <div class="direc">

                    <iframe src="{{$empresa->georeferencia}}" 
                    width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
           </section><hr>
            <section class="Contacto">
                <section id="contacto">
                    <h3><i class="fa-brands fa-whatsapp fa-beat-fade"></i> Contacto y  <i class="fa-brands fa-facebook fa-beat-fade"></i>  Redes Sociales</h3>
                    @foreach($redes as $item)
                    <button type="button" class="btn btn-outline-primary"><i class="{{$item->icon}}"></i><a target="_blank" href="{{$item->link}}"> {{$item->title}}</a></button>
                    @endforeach
                </section>
            </section><hr>    
            <section class="DERECHOS">
                <p class="footer">&copy; MI Mazabanda </p>
            </section>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        document.querySelectorAll('.nav-menu a').forEach((link) => {
            link.addEventListener('click', () => {
                document.querySelector('.menu-checkbox').checked = false; 
            });
        });
    </script>

</body>
</html>