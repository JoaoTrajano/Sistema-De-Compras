<?php
require 'UsuarioDados.class.php';
    $corpo = 
    '<html>
        <head>
            <title>Login</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        </head>
        <body style="margin: 0px;padding: 0px; background-color: #dcecea;">
        <div style="margin: 0 auto;width: 25%;border: 1px solid;border-radius: 5px;margin-top: 10%;
        background-color:#e9e9e9;class="form control">
            <div style="height: 10px;background-color:#00786e"></div>
            <form action="index.php" method="POST" style="padding-top: 50px;padding-right: 30px;padding-bottom: 50px;padding-left: 80px;">
                <label for="usuario_login"><b>Usu&aacute;rio:</b></label> <br>
                <input style="border-radius: 1px;" "type="text" id="usuario_login" name ="usuario_login" 
                placeholder="Seu usu&aacute;rio." />

                 <br><br>
                <label for="usuario_senha"><b>Senha: </b></label> <br>
                <input style="border-radius: 1px;" type="password" id="usuario_senha" name ="usuario_senha" 
                placeholder="Digite a sua senha."/>
                    
                <br><br><br>
                <div style="align: center;">
                    <button type="submit" name="confirmar">Entrar</button>
                </div>
                
            </form>
            <div style="text-align: center;">
               <a href="#link" > Esqueceu sua senha?</a>
            </div>
            <div style="height: 10px;background-color:#00786e"></div>
         </div>
        </body>
    </html>';

    if (isset($_POST["confirmar"])) {

        $nome = $_POST["usuario_login"];
        $senha = $_POST["usuario_senha"];

        $obj_user = new UsuarioDados($nome, $senha);
        $array = $obj_user->validarUsuario();
        
        echo "Bem - vindo, ".' '.$array["nome"];

    }else {
    
        echo $corpo;

    }

?>