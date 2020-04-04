<?php

require 'Conexao.class.php';

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
        $obj_conexao = new Conexao("localhost", "root", '');

        $nome = $this->nome_usuario;
        $senha = $this->senha_usuario;

        $conectou = $obj_conexao->conectar();

        if($conectou){
            $sql = "SELECT t.nome_usuario, t.nivel_usuario FROM tbusuario t WHERE t.usuario = '$nome' AND t.senha = '$senha'";
            $consulta = $obj_conexao->consultar($sql);
            
            if(mysqli_num_rows($consulta)){
                while($row = mysqli_fetch_array($consulta)){
                    $array = array("nome"=>$row["nome_usuario"], "nivel"=>$row["nivel_usuario"]);
                    $obj_conexao->desconectar();
                }
            }else {
                return 1;
                $obj_conexao->desconectar();
            }
        }else {
            echo "Não foi possível conectar ao banco.";
            die();
        }
        return $array;
    }
}
?>