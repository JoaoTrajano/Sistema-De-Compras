<?php
require 'UsuarioDados.class.php';
$strAlerta = '';
$corpo =
    '<html>
        <head>
            <title>Login</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="http://localhost/plataforma/_css/style_default.css" >
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
            <link rel="icon" type="shortcut icon" href="http://localhost/plataforma/_img/logo.ico" />
            <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        </head>
        <body style=" background-color: #dcecea;">
            <div class="container w-50 p-3" >
                <div class="row" >
                    <div class="col-md-8 col-sm-8">
                        logo do cliente aqui
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="http://localhost/plataforma/_img/logo.png"" alt="WiseSystem">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-12" style="background-color:#00786e;text-align: center;color:white;height:30px;padding:5px;">
                       <span>Bem Vindo!<span>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="row" style="background-color:white;padding:10px;">
                    <div class="col-md-12" style="padding:10px;">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="usuario"><span style="float:left;"><img src="http://localhost/plataforma/_img/login.jpg" alt="user" width="45"><span></label>
                                <input class="form-control" "type="text" id="usuario" name ="usuario_login" 
                                placeholder="Seu usu&aacute;rio." />
                                <br>
                                <label for="usuario_senha"><span style="float:left;"><img src="http://localhost/plataforma/_img/cadeado.png" alt="user" width="45"><span></label> 
                                <input class="form-control" type="password" id="usuario_senha" name ="usuario_senha" 
                                placeholder="Digite a sua senha."/> 
                                <br>
                                <input name="confirmar" class="btn btn-outline-success form-control" type="submit" value="Entrar">
                            </div>
                        </form>
                        <div class="row" style="text-align:center;">
                            <div class="col-md-12">
                                <span ><a href="#link" > Esqueceu sua senha?</a></span>
                                <br>
                                <span ><a href="#link" > Editar Login.</a></span>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-12" style="background-color:#00786e;text-align: center;height:30px;"></div>
                </div>
         </div>
        </body>
    </html>';

if (isset($_POST["confirmar"])) {

    $nome = $_POST["usuario_login"];
    $senha = $_POST["usuario_senha"];

    $obj_user = new UsuarioDados($nome, $senha);
    $array = $obj_user->validarUsuario();

    if (is_array($array)) {
        echo "Bem - vindo, " . ' ' . $array["nome"];
    } else {
        echo
        '<div class="container w-50 p3">
            <div class="row">
                <div class="col-md-12" style="height:10px;">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert" style="text-align:center;">
                    <span ><strong>Usu&aacuterio ou Senha Inv&aacutelidos</strong></span>
                    </div>
                </div>
            </div>
        </div>';
    }
}
    
    echo $corpo;

?>