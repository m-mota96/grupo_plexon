<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Grupo Plexon</title>
    <link rel="icon" type="image/png" href="{{asset('media/images/logo.ico')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-4.4.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-5.13.0/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body class="page-wrapper chiller-theme">
    @include('sidenav')
    <video id="div-home" class="w-100" src="{{asset('media/videos/gp.mp4')}}" autoplay controls muted></video>
    <div id="carouselExampleCaptions" class="carousel slide mtop" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('media/images/back_slide.png')}}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-blue">SOBRE NOSOTROS<br><br></h2>
                    <h5 class="text-grey">
                        EMPRESA LÍDER EN EXPOSICIONES Y EVENTOS DE CONSUMO
                        NACIONAL E INTERNACIONAL.
                    </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('media/images/back_slide.png')}}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-blue">SOBRE NOSOTROS<br><br></h2>
                    <h5 class="text-grey">
                        CREADORES DE CONCEPTOS DE ÉXITO COMO:
                        <img class="w-movile" src="{{asset('media/images/back_slide2.png')}}">
                    </h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('media/images/back_slide.png')}}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-blue">SOBRE NOSOTROS<br></h2>
                    <h5 class="text-grey">
                        <img class="w-movile" src="{{asset('media/images/back_slide3.png')}}">
                    </h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container mtop" id="div-events">
        <div class="row justify-content-center pl-3 pr-3">
            <h3 class="text-blue">EVENTOS</h3>
            <hr class="hr-blue w-100">
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <a href="https://brideadvisor.mx/brideweekend">
                    <img class="w-100" src="media/images/card1.gif">
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a href="http://expo15.com">
                    <img class="w-100" src="media/images/card2.gif">
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a href="http://expo15.com/teenfashion">
                    <img class="w-100" src="media/images/card3.gif">
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a href="https://brideadvisor.mx/brideweekend/carrera">
                    <img class="w-100" src="media/images/card4.gif">
                </a>
            </div>
        </div>
    </div>
    <div class="container mtop" id="div-digital">
        <div class="row bl-blue">
            <div class="col-12">
                <h3 class="text-blue">CONCEPTOS DIGITALES</h3>
            </div>
            <div class="col-12">
                <a class="btn btn-light pl-3 pr-3" href="https://brideadvisor.mx">BRIDE ADVISOR</a>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <a href="https://brideadvisor.mx"><img class="c-digital" src="{{asset('media/images/ba.png')}}"></a>
        </div>
    </div>
    <div class="row mtop bg-blue pt-5 pb-5" id="div-contact">
        <div class="col-12 text-center mb-3">
            <h3 class="text-blue">CONTÁCTANOS</h3>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-8 offset-lg-3 offset-md-2">
            <form id="formContact">
                <input type="hidden" value="{{URL::asset('')}}" id="URL">
                <input class="form-control mb-3" type="text" placeholder="NOMBRE" required id="name">
                <input class="form-control mb-3" type="text" placeholder="TELÉfONO" required id="phone">
                <input class="form-control mb-3" type="text" placeholder="E-MAIL" required id="email">
                <select class="form-control mb-3" id="service" required>
                    <option value="" selected disabled>¿QUÉ SERVICIO TE INTERESA</option>
                    <option value="Bride Weekend">Bride Weekend</option>
                    <option value="Expo Espacio 15">Expo Espacio 15</option>
                    <option value="Teatro Vallarta">Teatro Vallarta</option>
                    <option value="Bride Advisor">Bride Advisor</option>
                    <option value="Viva Tequila">Viva Tequila</option>
                </select>
                <textarea class="form-control mb-3" rows="5" placeholder="MENSAJE" required id="msg"></textarea>
                <div class="g-recaptcha" data-sitekey="6LcTUOgUAAAAAPHvnIvlnSj0Gl2xrsvypVNilHTa"></div><br>
                <div class="col-12 text-right p-0">
                    <button class="btn btn-primary" type="submit">ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mtop footer">
        <div class="col-lg-2 col-sm-12 p-3 text-center">
            <img class="w-100 img-footer" src="{{asset('media/images/logo_plexon.png')}}">
        </div>
        <div class="col-lg-8 col-sm-12 text-center text-white pt-4">
            <i class="fab fa-facebook-f mr-3"></i>
            <i class="fab fa-instagram mr-3"></i>
            <i class="fab fa-youtube"></i>
            <p class="size">Grupo Plexon Derechos Reservados 2020</p>
        </div>
        <div class="col-lg-2 col-sm-12 text-center text-white pt-4">
            <p class="mt-2"><b>CONTACTO</b><br>info@grupoplexon.com</p>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('bootstrap-4.4.1/js/bootstrap.js')}}"></script>
    {{-- <script src="{{asset('js/sweetalert2.js')}}"></script> --}}
    <script src="{{asset('js/index.js')}}"></script>
</body>
</html>