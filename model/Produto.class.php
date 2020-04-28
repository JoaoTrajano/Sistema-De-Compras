<?php

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
    }
?>