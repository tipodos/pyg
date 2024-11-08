<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>P&G</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="display-4 text-white text-uppercase m-0">P&G</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="#home" class="nav-item nav-link active">Inicio</a>
                <a href="#about" class="nav-item nav-link">Nosotros</a>
                <a href="#service" class="nav-item nav-link">Servicios</a>
                <a href="#project" class="nav-item nav-link">Proyectos</a>
            </div>
            <a href="index.html" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                <h1 class="display-4 text-white text-uppercase m-0">G A S</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="#team" class="nav-item nav-link">Team</a>
                <a href="#faqs" class="nav-item nav-link">FAQs</a>
                <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                <a href="#contact" class="nav-item nav-link">Contactos</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    @foreach ($imagenes as $imagen)
                        @if ($imagen->categoria && $imagen->categoria->nombre=='carrucel1')
                            <img class="position-absolute w-100 h-100" src="{{ asset('img/'.$imagen->img) }}" style="object-fit: cover;">
                        @endif
                    @endforeach
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">P&G</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Servicio de montajes e instalaciones de gas a nivel doméstico e industrial</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Evianos tus consultas</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    @foreach ($imagenes as $imagen)
                        @if ($imagen->categoria && $imagen->categoria->nombre=='carrucel2')
                            <img class="position-absolute w-100 h-100" src="{{ asset('img/'.$imagen->img) }}" style="object-fit: cover;">
                        @endif
                    @endforeach
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">P&G</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Servicio de montajes e instalaciones de gas a nivel doméstico e industrial</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="#contact">Evianos tus consultas</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    @foreach ($imagenes as $imagen)
                        @if ($imagen->categoria && $imagen->categoria->nombre == 'nosotros')
                            <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('img/'.$imagen->img) }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-7">
                    <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Nosotros</h6>
                    <h1 class="display-4 mb-3"><span class="text-primary">Más de 25 años de experiencia</span> en la instalación de gas a nivel industrial</h1>
                    @foreach ($texto as $txt)
                    @if ($txt->campo == 'nosotros')                    
                        <p>{{$txt->texto}}</p>
                    @endif
                @endforeach
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-2" type="button" data-toggle="modal" data-target="#exampleModalLong" data-categoria="nosotros">Leer Mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid py-5" id="service">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Servicios</h6>
                <h1 class="font-secondary display-4">¿Qué ofrecemos?</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            @foreach ($imagenes as $imagen)
                                @if ($imagen->categoria && $imagen->categoria->nombre=='ofrecemos1')
                                    <img class="img-fluid" src="{{'img/'.$imagen->img}}" alt="">
                                @endif     
                            @endforeach
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-categoria="ofrecemos1">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Instalaciones de gas domestico</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            @foreach ($imagenes as $imagen)
                                @if ($imagen->categoria && $imagen->categoria->nombre=='ofrecemos2')
                                    <img class="img-fluid" src="{{'img/'.$imagen->img}}" alt="">
                                @endif     
                            @endforeach
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-categoria="ofrecemos2">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Mantenimiento de Tuberias de Gas </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            @foreach ($imagenes as $imagen)
                                @if ($imagen->categoria && $imagen->categoria->nombre=='ofrecemos3')
                                    <img class="img-fluid" src="{{'img/'.$imagen->img}}" alt="">
                                @endif     
                            @endforeach
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-categoria="ofrecemos3">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Mantenimiento Preventivo y Correctivo</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            @foreach ($imagenes as $imagen)
                                @if ($imagen->categoria && $imagen->categoria->nombre=='ofrecemos4')
                                    <img class="img-fluid" src="{{'img/'.$imagen->img}}" alt="">
                                @endif     
                            @endforeach
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-categoria="ofrecemos4">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Soluciones Innovadoras</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- termina servicios -->


    <!-- comienza galeria -->
    <div class="container-fluid bg-gallery" id="project" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Proyectos</h6>
            <h1 class="font-secondary display-4 text-white">Galeria de fotos de proyectos</h1>
        </div>
        <div class="owl-carousel gallery-carousel">
            @foreach ($imagenes as $imagen)

                @if ($imagen->categoria && $imagen->categoria->nombre == 'galeria')
                <div class="gallery-item">
                    <img class="img-fluid w-100" src="{{asset('img/'.$imagen->img)}}" alt="">
                    <a class="btn btn-primary" href="{{asset('img/'.$imagen->img)}}" data-lightbox="gallery">
                        <i class="fa fa-2x fa-plus text-white"></i>
                    </a>
                </div>
                @endif
                
            @endforeach
        </div>
    </div>
    <!-- Termina galeria -->


    <!-- Team Start -->
    <div class="container-fluid py-5" id="team">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Equipo</h6>
                <h1 class="font-secondary display-4">GRUPO DE TRABAJO</h1>
            </div>
            <div class="row justify-content-lg-start m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2">Donald John</h5>
                                <p class="text-muted font-italic mb-2">CEO & Founder</p>
                                <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem</p>
                                <div class="position-relative mb-2">
                                    <a class="btn btn-outline-primary btn-square mr-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="img/team-1.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-end m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="img/team-2.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2">Adam Phillips</h5>
                                <p class="text-muted font-italic mb-2">Engineer</p>
                                <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem</p>
                                <div class="position-relative mb-2">
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-start m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2">Thomas Olsen</h5>
                                <p class="text-muted font-italic mb-2">Engineer</p>
                                <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem</p>
                                <div class="position-relative mb-2">
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="img/team-3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-end m-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="{{asset('img/team-4.jpg')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2">James Alien</h5>
                                <p class="text-muted font-italic mb-2">Engineer</p>
                                <p>Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem</p>
                                <div class="position-relative mb-2">
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square mr-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- FAQs Start -->
    <div class="container-fluid py-5" id="faqs">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">FAQs</h6>
                <h1 class="display-4">DEBERIAS DE SABERLO</h1>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <h3 class="mb-4">¿Por que usar gas natural?</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Eficiencia Energetica</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Reduccion de emisiones contaminantes</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>costo economico</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Seguridad y confiablidad</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <h3 class="mb-4">¿Por que elegirnos?</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Experiencia y especializacion</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Calidad y seguridad</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Servicio personalizado y atencion al cliente</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success mr-2"></i>Precios competitivos y garantia</h5>
                    </div>
                </div>
                <div class="col-md-12 text-center pt-3">
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-4 btn-scroll" href="#contact">Obtener cotizacion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container py-5">
            <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Testimonial</h6>
                <h1 class="display-4">Our Clients Say</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <img class="img-fluid mx-auto mb-3" src="{{asset('img/testimonial-1.jpg')}}" style="width: 100px;">
                            <p style="font-size: 22px;">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                            <h4>Client Name</h4>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <img class="img-fluid mx-auto mb-3" src="{{asset('img/testimonial-2.jpg')}}" style="width: 100px;">
                            <p style="font-size: 22px;">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                            <h4>Client Name</h4>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Contactos</h6>
                <h1 class="font-secondary display-4">Contactenos</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="name" placeholder="Tu Nombre" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control bg-secondary border-0 py-4 px-3" id="email" placeholder="Tu Correo" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control bg-secondary border-0 py-4 px-3" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="6" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-12 mb-4 px-4">
                <div class="row mb-5 p-4" style="background: rgba(256, 256, 256, .05);">
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Nuestra Oficina</h5>
                            <p class="mb-4 m-md-0">El Tambo</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">email</h5>
                            <p class="mb-4 m-md-0">gherrera@gypingenieros.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Celular</h5>
                            <p class="m-0">+51 954 625 212</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <p>EDIFIGAS se enfoca en brindar un servicio de excelencia en el sector de la construcción, con un equipo altamente capacitado. 
                            La empresa mantiene altos estándares de calidad e integridad, ofreciendo maquinaria de alta calidad en óptimas condiciones, 
                            con mantenimiento especializado y a precios competitivos en el mercado peruano.</p>
                            <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Nuestros Servicios</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Solar System</a>
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Wind Turbine</a>
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Wind Generator</a>
                            <a class="text-white btn-scroll mb-2" href="#service"><i class="fa fa-angle-right mr-2"></i>Solar Energy</a>
                            <a class="text-white btn-scroll" href="#service"><i class="fa fa-angle-right mr-2"></i>Solar Panel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white text-center border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .05) !important;">
        <p class="m-0 text-white">&copy; <a href="#">Domain Name</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Título por defecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImagen" class="img-fluid mb-4" src="default-image.jpg" alt="Imagen de la categoría">
                    <p>Texto por defecto</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    
    <script>
        let categoriaSeleccionada; // Variable global para almacenar la categoría

$('#exampleModalLong').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Botón que abrió el modal
    categoriaSeleccionada = button.data('categoria'); // Captura la categoría del botón

    // Convierte la colección de textos e imágenes de Laravel a JSON
    var textos = @json($texto);
    var imagenes = @json($imagenes);

    // Encuentra el texto y la imagen correspondiente a la categoría seleccionada
    var contenidoTexto = textos.find(texto => texto.campo === categoriaSeleccionada);
    var contenidoImagen = imagenes.find(imagen => imagen.categoria && imagen.categoria.nombre === categoriaSeleccionada);

    // Actualiza el título, texto e imagen en el modal según la categoría seleccionada
    if (contenidoTexto) {
        $('#modalTitulo').text(contenidoTexto.titulo); // Actualiza el título del modal
        $('#modalContenidoTexto').text(contenidoTexto.texto); // Actualiza el texto en el modal
    } else {
        $('#modalTitulo').text("Título no disponible");
        $('#modalContenidoTexto').text("Contenido no encontrado para esta categoría.");
    }

    if (contenidoTexto && contenidoImagen) {
        // Cambia el contenido del modal con el texto e imagen seleccionados
        $('#exampleModalLong .modal-title').text(contenidoTexto.titulo);
        $('#exampleModalLong .modal-body img').attr('src', 'img/'+contenidoImagen.img);
        $('#exampleModalLong .modal-body p').text(contenidoTexto.texto);
    } else {
        console.log("No se encontró contenido para la categoría seleccionada:", categoriaSeleccionada);
    }
});
    </script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>