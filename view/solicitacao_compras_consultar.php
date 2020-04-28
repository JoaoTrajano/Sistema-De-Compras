<?php


require '..\model\VisaoUsuario.class.php';

session_start();
$nome = $_SESSION['nome_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];
$_SESSION['titulo_pagina_atual'] = 'Consultar Solicitações';

$menu = new VisaoUsuario();
if(empty($nome)){
    unset($_SESSION['nome_usuario']);
    unset($_SESSION['nivel_usuario']);
    session_destroy();
    header('Location: http://localhost/plataforma');
}

$menu->visaoMenuPrincipal();
$corpo = '
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