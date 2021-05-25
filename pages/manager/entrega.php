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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
                
    <!-- Our styles -->
    <link rel="stylesheet" href="../../commom/css/index.css">
    <link rel="stylesheet" href="../../commom/css/tablet.css">
    <link rel="stylesheet" href="css/preparacao.css">

    <link rel="icon" type="image/png" href="../../commom/img/logos/coinlogo2.svg"/>
    <title>La Pechincha Brasil</title>
</head>

<body>


    <div class="tablet container-fluid p-0">
        <div class="content container-fluid m-0">
            <!-- Header begin -->
            <div class="row header align-items-center p-1 bg-warning">
                <div class="col-md-4">
                    <a href="#" class="text-decoration-none">
                        <img id="header_logo_left" alt="logo" src="../../commom/img/logos/coinlogo2.svg" width="40px" />

                        <img id="header_logo_right" alt="" src="../../commom/img/logos/brand.png"/>
                    </a>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4 text-center text-dark">
                    Manager Screen
                </div>
            </div>
            <!-- Header end -->

            <div class="text-center h3 mt-3 font-weight-bold text-dark"> Rastreio do Pedido <br>
                <span class="badge bg-dark text-warning h3">987456</span>
            </div>

            
            <div class="container delivery-progress-bar text-center mt-5">
                <div class="progress m-auto" style="width: 480px;">
                    <div class="align-items-start progress-bar bg-warning text-warning progress-bar-striped progress-bar-animated" id="out-step" role="progressbar" style="width: 200px">
                        <span class="step-dot dot-out">1</span>
                    </div>
                    <div class="align-items-start progress-bar bg-warning text-warning progress-bar-striped progress-bar-animated" id="out-step" role="progressbar" style="width: 200px">
                        <span class="step-dot dot-out">2</span>
                    </div>
                    <div class="align-items-start progress-bar bg-transparent text-secondary progress-bar-striped progress-bar-animated" id="load-step" role="progressbar" style="width: 200px">
                        <span class="step-dot dot-load">3</span>
                    </div>
                    <div class="align-items-start progress-bar bg-transparent  text-secondary progress-bar-striped progress-bar-animated" id="end-step" role="progressbar" style="width: 0">
                        <span class="step-dot dot-end">4</span>
                    </div>
                </div>
    
                <div class="mt-3 mb-4">
                    <span class="step-begin">Pedido Efetuado</span>
                    <span class="step-out">Saiu da Loja</span>
                    <span class="step-load">Em Transporte</span> 
                    <span class="step-end">Pedido Entregue</span>
                </div>
                
            </div>
                
            <div class="container order-addres-data">
                <div class="card">
                    <div class="card-header">
                        Dados da entrega
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <span class="bi bi-signpost-2-fill me-2 input-group-text"></span>
                            <input type="text" class="form-control" id="manager_user" readonly  placeholder="Someone">
                            <span class="input-group-text ml-1 p-0 pl-1 pr-1  text-dark"> Endereço</span>
                        </div> 
                        <div class="row mb-3">
                            <div class="col-md-8 input-group">
                                <span class="bi bi-mailbox2 me-2 input-group-text"></span>
                                <input type="text" class="form-control" id="manager_user" readonly  placeholder="Number">
                                <span class="input-group-text ml-1 p-0 pl-1 pr-1  text-dark">CEP</span>
                            </div>
                            <div class="col-md-4 input-group">
  
                                <input type="text" class="form-control" id="manager_user" readonly  placeholder="Number">
                                <span class="input-group-text ml-1 p-0 pl-1 pr-1  text-dark">Número</span> 
                            </div>
                        </div>   
                        <div class="input-group mb-3">
                            <span class="bi bi-person-fill me-2 input-group-text"></span>
                            <input type="text" class="form-control" id="manager_user" readonly  placeholder="Someone">
                            <span class="input-group-text ml-1 p-0 pl-1 pr-1  text-dark"> Destinatário</span>
                        </div> 
                        <div class="row mb-3">
                            <div class="col-md-6 input-group">
                                <span class="bi bi-phone-fill me-2 input-group-text"></span>
                                <input type="text" class="form-control" id="manager_user" readonly  placeholder="Number">
                                <span class="input-group-text ml-1 p-0 pl-1 pr-1  text-dark">Telefone</span>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>                  
                    </div>
                </div>
            </div>

            <div class="container text-center mt-5">
                <button class="btn btn-dark text-warning">Concluir Pedido</button>
            </div>
            

            <!-- footer begin -->
            <div class="row footer align-items-center p-1">

                <div class=" text-center" id="return-btn">
                    <a href="pedidos.html" class="text-secondary"><i class="bi bi-arrow-return-left h3"></i></a>
                </div>
                <div class="text-center" id="home-btn">
                    <a href="main.html" class="text-secondary"><i class="bi bi-house-fill h3"></i></a>
                </div>
                <div class="text-center" id="apps-btn">
                    <a href="main.html" class="text-secondary"><i class="bi bi-back h3"></i></a>
                </div>

            </div>
            <!-- footer end -->

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous">
    </script>

</body>

</html>