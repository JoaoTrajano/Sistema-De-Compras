<?php

    class EstoqueProduto{
        
        private $codprodutoestoque;
        private $coordenada;

        public function setCodProdutoEstoque($codprodutoestoque){
            $this->codprodutoestoque = $codprodutoestoque;
        }
        public function getProdutoEstoque(){
            return $this->codprodutoestoque;
        }

        public function setCodProduto($codproduto){
            $this->codproduto = $codproduto;
        }
        public function getCodFornecedor(){
            return $this->codfornecedor;
        }

        public function setCoordenada($coordenada){
            $this->coordenada = $coordenada;
        }
        public function getCoordenada(){
            return $this->coordenada;
        }
    }
?>