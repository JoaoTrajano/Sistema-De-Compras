<?php

session_start();
$nome = $_SESSION['nome_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];

if(empty($nome)){
    unset($_SESSION['nome_usuario']);
    unset($_SESSION['nivel_usuario']);
    session_destroy();
    header('Location: http://localhost/plataforma');
}

$corpo = '<html>
<head>
    <title>Inserir Compra.</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/plataforma/_css/style_default.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="icon" type="shortcut icon" href="http://localhost/plataforma/_img/logo.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
<body style=" background-color: #dcecea;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-md bg-primary  navbar-dark ">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="container" style="text-align:center;">
                                <img src="http://localhost/plataforma/_img/login.jpg" alt="user" width="45" style="border-radius:50%;float:left;">
                                <div class="row">
                                    <div class="col-md-1">
                                        <span >'.$nome.'</span>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <span class="dropdown-item" onclick="sair()" style="cursor:pointer;" >Logout <img src="http://localhost/plataforma/_img/icone_sair.png" alt="user" width="25" style="float:right;"></span>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav" style="padding-left:5px;">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Solicitação de Compras.</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="btn btn-link" href="http://localhost/plataforma/view/solicitacao_compras_inserir.php">Inserir Solicitação.</a><br>
                                        <a class="btn btn-link" href="http://localhost/plataforma/view/solicitacao_compras_consultar.php">Consultar Solicitação.</a><br>
                                    </div>
                                </div> 
                            </li>
                        </ul>
                    </div>  
                </nav>
            </div>
        </div>
    </div>

    <script> 
        function sair(){
            if(confirm("Deseja mesmo sair?")){
                window.location.href = "http://localhost/plataforma/sair.php";
            }
        }
    </script>
</body>
</html>';

echo $corpo;

?>