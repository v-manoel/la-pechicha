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


    <!-- Our styles -->
    <link rel="stylesheet" href="../../commom/css/index.css">
    <link rel="stylesheet" href="css/payment.css">

    <link rel="icon" type="image/png" href="../../commom/img/logos/coinlogo2.svg" />
    <title>La Pechincha Brasil</title>
</head>

<body>

    <!-- Little Navbar Begin -->
    <div class="bg-dark border-bottom">
        <div class="container " style="min-width: 92%;">
            <div class="row align-items-center p-2">
                <div class="col-md-4">
                    <a href="#">
                        <img id="header_logo_left" alt="logo" src="../../commom/img/logos/coinlogo2.svg" width="40px" />

                        <img id="header_logo_right" alt="" src="../../commom/img/logos/brand.png"
                            style="height:30px;width:80px; margin-left: 10px; margin-right: 30px; margin-top: 5px;" />
                    </a>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4 text-end text-warning">
                    Pagamento
                </div>
            </div>
        </div>
    </div>
    <!-- Little NavBar End -->

    <div class="container page-container card-form">
        <div class="row">
            <div class="col-md-7 payment-method">
                <h4 class="mb-4">Como você prefere pagar ?</h4>
                <div id="atual-payment-method" class="container-fluid">
                    <div class="payment-option align-items-center">
                        <div class="row align-items-center">
                            <div class="col-md-1">
                                <i class="bi bi-credit-card-fill h4"></i>
                            </div>
                            <div class="col-md-8 desc">
                                Cartão de Crédito Example
                            </div>
                            <div class="col-md-3 text-end">
                                <a href="preview.html">Alterar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" method="post">
                <h4 class="mb-4">Insira os dados do cartão</h4>
                <div class="container-fluid">
                    <div class="row p-4">

                        <div class="col-md-3">
                            <form class="row g-3 mt-auto">

                                <div class="label-float">
                                    <input type="text" class="w-auto" id="cardCod" placeholder="123" required>
                                    <label for="cardCod" class="w-auto">Código de segurança</label>
                                </div>

                            </form>
                        </div>

                        <div class="col-md-9">
                            <div class="m-auto" id="iterativeCardBack">
                                <div class="" id="stripCard"> </div>
                                <div class="h4 text-light mt-4 text-end">
                                    <span class="mr-4 p-1 text-dark bg-white">* * *</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <h4 class="mb-3">Em quantas vezes ? </h4>
                    <div class="container-fluid">
                        <div class="form-check payment-option align-items-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="1x">
                            <label class="form-check-label row align-items-center" for="1x">
                                <div class="col-md-6 parcela-parcial h5">
                                    <span class="font-weight-bold me-2">1x </span> R$ <span>99,99</span>
                                </div>
                                <div class="col-md-6 parcela-total text-end text-secondary h6">
                                    <span> R$ <span>99,99</span></span>
                                </div>
                            </label>
                        </div>
                        <hr class="m-0 h-25 text-secondary ">

                        <div class="form-check payment-option align-items-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="2x">
                            <label class="form-check-label row align-items-center" for="2x">
                                <div class="col-md-6 parcela-parcial h5">
                                    <span class="font-weight-bold me-2">2x </span> R$ <span>99,99</span>
                                </div>
                                <div class="col-md-6 parcela-total text-end text-secondary h6">
                                    <span> R$ <span>99,99</span></span>
                                </div>
                            </label>
                        </div>
                        <hr class="m-0 h-25 text-secondary ">
                        <div class="form-check payment-option align-items-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="3x">
                            <label class="form-check-label row align-items-center" for="3x">
                                <div class="col-md-6 parcela-parcial h5">
                                    <span class="font-weight-bold me-2">3x </span> R$ <span>99,99</span>
                                </div>
                                <div class="col-md-6 parcela-total text-end text-secondary h6">
                                    <span> R$ <span>99,99</span></span>
                                </div>
                            </label>
                        </div>
                        <hr class="m-0 h-25 text-secondary ">
                        <div class="form-check payment-option align-items-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="4x">
                            <label class="form-check-label row align-items-center" for="4x">
                                <div class="col-md-6 parcela-parcial h5">
                                    <span class="font-weight-bold me-2">4x </span> R$ <span>99,99</span>
                                </div>
                                <div class="col-md-6 parcela-total text-end text-secondary h6">
                                    <span> R$ <span>99,99</span></span>
                                </div>
                            </label>
                        </div>
                        <hr class="m-0 h-25 text-secondary ">
                        <div class="form-check payment-option align-items-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="5x">
                            <label class="form-check-label row align-items-center" for="5x">
                                <div class="col-md-6 parcela-parcial h5">
                                    <span class="font-weight-bold me-2">5x </span> R$ <span>99,99</span>
                                </div>
                                <div class="col-md-6 parcela-total text-end text-secondary h6">
                                    <span> R$ <span>99,99</span></span>
                                </div>
                            </label>
                        </div>
                        <hr class="m-0 h-25 text-secondary ">
                        <div class="form-check payment-option align-items-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="6x">
                            <label class="form-check-label row align-items-center" for="6x">
                                <div class="col-md-6 parcela-parcial h5">
                                    <span class="font-weight-bold me-2">6x </span> R$ <span>99,99</span>
                                </div>
                                <div class="col-md-6 parcela-total text-end text-secondary h6">
                                    <span> R$ <span>99,99</span></span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning text-dark float-md-end">Continuar</button>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 text-center">
                <div class="wrapper mt-2">
                    <div id="sidebar" class="mb-4">
                        <div class="container">
                            <div class="sidebar-header p-2">
                                <span class="title text-dark h5">Resumo da compra</span>
                                <i id="dismiss" class="bi bi-x h2"></i>
                            </div>
                            <hr class="m-0 h-25 text-secondary mt-3 mb-2">
                            <div class="row item">
                                <div class="col-md-6 col-sm-6 text-start">
                                    Produtos(<span class="quantidade">3</span>)
                                </div>
                                <div class="col-md-6 col-sm-6 text-end">
                                    R$ <span clas="total">99,99</span>
                                </div>
                            </div>

                            <div class="row item">
                                <div class="col-md-6 col-sm-6 text-start">
                                    Envio
                                </div>
                                <div class="col-md-6 col-sm-6 text-end">
                                    R$ <span clas="total">99,99</span>
                                </div>
                            </div>
                            <hr class="m-0 h-25 text-secondary mt-3 mb-2">
                            <div class="row item">
                                <div class="col-md-6 col-sm-6 text-start h5">
                                    Você Pagará
                                </div>
                                <div class="col-md-6 col-sm-6 text-end h5">
                                    R$ <span clas="total">99,99</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="content">
                        <button type="button" id="sidebarCollapse" class="btn btn-dark text-warning align-items-center">
                            <i class="bi bi-info-square-fill"></i>
                            <span class="h6 ml-2">Resumo da compra</span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <footer class=" bg-dark text-center text-lg-start w-100">
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

    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


    <!-- Our Scripts -->
    <script src="../../commom/js/items5-carousel.js"></script>
    <script src="js/sidebar.js"></script>


</body>

</html>