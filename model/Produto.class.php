<?php

    require_once "Conexao.class.php";

    class Produto{
        
        private $codproduto;
        private $codfornecedor;
        private $nomeProduto;
        private $preco;
        private $tipo;

        public function setCodProduto($codproduto){
            $this->codproduto = $codproduto;
        }
        public function getCodProduto(){
            return $this->codproduto;
        }

        public function setCodFornecedor($codfornecedor){
            $this->codfornecedor = $codfornecedor;
        }
        public function getCodFornecedor(){
            return $this->codfornecedor;
        }

        public function setNomeProduto($nomeProduto){
            $this->nomeProduto = $nomeProduto;
        }
        public function getCodNomeProduto(){
            return $this->nomeProduto;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function getPreco(){
            return $this->preco;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }

         public function listar($codproduto){
            $obj_conexao = new Conexao("localhost", "root", '');

            $sql = "SELECT p.nome, p.tipo, ep.quantidade FROM tbproduto p 
            LEFT JOIN tbestoque_produto ep ON p.codestoqueproduto = ep.codestoqueproduto
            WHERE p.codproduto = $codproduto";

            $consulta = $obj_conexao->consultar($sql);
           
            if($consulta){
               while($row = mysqli_fetch_array($consulta)){
                    $array_produto = array('nome'=>$row["nome"], 'tipo'=>$row["tipo"], 'quantidade'=>$row["quantidade"]);
                    return $array_produto;
                }
            }
        }
    }
?>