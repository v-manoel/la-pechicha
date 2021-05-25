<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">

    <!-- Slick Carousel-->
    <link rel="stylesheet" type="text/css" href="../../slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../../slick/slick-theme.css" />

    <!-- Our styles -->
    <link rel="stylesheet" href="../../commom/css/index.css">
    <link rel="stylesheet" href="../../commom/css/items5-carousel.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="icon" type="image/png" href="../../commom/img/logos/coinlogo2.svg" />
    <title>La Pechincha Brasil</title>
</head>

<body>

    <!-- Navbar Begin -->
    <div id="header" class="bg-dark border-bottom">
        <div class="container " style="min-width: 92%;">
            <div id="header_top" class="row align-items-center">
                <div class="col-auto">
                    <a href="#">
                        <img id="header_logo_left" alt="logo" src="../../commom/img/logos/coinlogo2.svg" width="50px" />

                        <img id="header_logo_right" alt="" src="../../commom/img/logos/brand.png"
                            style="height:36px;width:86px; margin-left: 10px; margin-right: 30px; margin-top: 5px;" />
                    </a>
                </div>
                <div id="search-input" class="col">
                    <form action="/search" method="get" role="search" id="custom-search-input">
                        <label for="keywords" class="sr-only"></label>
                        <div class="input-group">
                            <input id="keywords" name="keywords" type="text" class="form-control" id="search-field"
                                placeholder="Buscar produtos, marcas e mais">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-info btn-lg"><i class="bi bi-search"
                                        aria-hidden="true"></i></button>
                            </span>
                        </div>
                    </form>
                </div>

                <div id="header_cart" class="col-auto">
                    <a href="#" class="text-warning">
                        <i class="bi bi-basket2 text-warning" style="font-size: 1.6rem; color: white;"></i>
                        <span class="badge bg-warning rounded-circle text-dark"
                            style="position: relative; right: 16px; top: -16px; font-size: 14px;">4</span>
                    </a>
                </div>
            </div>

            <nav class=" row navbar-expand-lg navbar-dark" style="margin-top: 10px;">
                <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    Menu <i class="bi bi-chevron-down" style="font-size: 1.2rem; color: white;" aria-hidden="true"></i>
                </button>

                <div class="row align-items-center">
                    <div class="col-lg-2"> </div>

                    <div class="collapse navbar-collapse col-lg-5 justify-content-start" id="navbarSupportedContent">

                        <ul class="navbar-nav" style="font-size: 15px;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Categorias
                                </a>
                                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-warning" href="#">Action</a></li>
                                    <li><a class="dropdown-item text-warning" href="#">Another action</a></li>
                                    <li><a class="dropdown-item text-warning" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link text-warning" href="#"> Ofertas do dia</a>
                            </li>
                            <li>
                                <a class="nav-link text-warning" href="#"> Histórico</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-warning" href="#"> Supermercado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-warning" href="#"> Contato</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3"></div>
                    <div class="collapse navbar-collapse col-lg-2 justify-content-end" id="navbarSupportedContent"
                        style="padding: 0;">
                        <ul class="navbar-nav" style="font-size: 15px;">
                            <li class="nav-item">
                                <a class="nav-link text-warning" href="#">
                                    <i class="bi bi-box-arrow-in-right text-warning me-2"
                                        style="font-size: 1.4rem; color: white;"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-warning" href="#">
                                    <i class="bi bi-bell text-warning me-2"
                                        style="font-size: 1.4rem; color: white;"></i>
                                </a>
                            </li>
                            <li class="nav-item" style="margin-top: 5px;">
                                <a class="nav-link text-warning" href="#">
                                    Compras
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

        </div>
    </div>
    <!-- NavBar End -->

    
    <div class="container-carr">
    
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-indicators">
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="img/c2.jpg" class="d-block w-100 img-responsive" alt="...">
           </div>
           <div class="carousel-item">
             <img src="img/c4.jpg" class="d-block w-100 img-responsive" alt="...">
           </div>
           <div class="carousel-item">
             <img src="img/c3.jpg" class="d-block w-100 img-responsive" alt="...">
           </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>
       </div>
 
     </div>
     <div class="container">
         <div class="row cost">
 
 
             <h1 class="nps">Contatos</h1>
     
           <p><img src="img/wpp1.png" style="height: 17px; width: 20px;">WhatsApp:</p>
           <p>-(00) 0 0000-0000</p>
       
         
         <p><img src="img/facebook.png" style="height: 17px; width: 20px;">Facebook:</p>
         <p>-www.facebook.com/lapechincha</p>
       
         
         <p ><img src="img/email.png" style="height: 17px; width: 20px;">E-mail:
 
         </p>
         <p>-atendimentolapechinca@lapechincha.com.br</p>
          
         
         </div>
     </div>


    <footer class="bg-dark text-center text-lg-start w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright | Todos os Direitos reservados
                </div>
            </div>
            <div class="row">
                <div class="text-center p-3">
                    <ul>
                        <li><a href=""> Trabalhe conosco</a></li>
                        <li><a href="">Termos e condições</a></li>
                        <li><a href="">Como cuidamos da sua privacidade</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <!-- Slick Scripts -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../../slick/slick.min.js"></script>

    <!-- Our Scripts -->
    <script src="../../commom/js/items5-carousel.js"></script>


</body>

</html>