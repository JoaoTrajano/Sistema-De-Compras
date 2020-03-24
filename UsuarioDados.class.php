<?php

class UsuarioDados {

    private $nome_usuario;
    private $senha_usuario;

    function __construct($nome, $senha){
        $this->nome_usuario = $nome;
        $this->senha_usuario = $senha;

    }

    public function getNomeUsuario(){
        return $this->nome_usuario;
    }
    public function getSenhaUsuario(){
        return $this->senha_usuario;
    }

    public function validarUsuario()
    {
        
    }

}
?>