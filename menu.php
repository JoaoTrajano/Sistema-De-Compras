<?php
    session_start();
    $nome = $_SESSION['nome_usuario'];
    $nivel_usuario = $_SESSION['nivel_usuario'];

    echo $nome;

?>
