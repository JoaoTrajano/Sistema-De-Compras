<?php

     class SolicitacaoDeCompras {

        private $codsolicitacao;
        private $codsolicitante;
        private $codproduto;
        private $data;
        private $observacao;
        private $quantidade;


        public function setCodSolicitacao($codsolicitacao){
            $this->codsolicitacao = $codsolicitacao;
        }
        public function getCodSolicitacao(){
            return $this->codsolicitacao;
        }

        public function setCodSolicitante($codsolicitante){
            $this->codsolicitante = $codsolicitante;
        }
        public function getCodSolicitante(){
            return $this->codsolicitante;
        }

        public function setCodProduto($codproduto){
            $this->codproduto = $codproduto;
        }
        public function getCodProduto(){
            return $this->codproduto;
        }

        public function setData($data){
            $this->data = $data;
        }
        public function getData(){
            return $this->data;
        }

        public function setObservacao($observacao){
            $this->observacao = $observacao;
        }
        public function getObervacao(){
            return $this->observacao;
        }

        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function getQuantidade(){
            return $this->quantidade;
        }

        public function inserir(){
            # code...
        }

        public function editar(){
            # code...
        }

        public function excluir(){
            # code...
        }

        public function selecionar(){
            # code...
        }
        

        
     }
?>