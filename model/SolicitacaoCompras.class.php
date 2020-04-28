<?php

     class SolicitacaoDeCompras {

        private $codsolicitacao;
        private $codsolicitante;
        private $codproduto;
        private $datasolicitacao;
        private $observacao;
        private $prioridade;


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

        public function setDataSolicitacao($datasolicitacao){
            $this->datasolicitacao = $datasolicitacao;
        }
        public function getDataSolicitacao(){
            return $this->datasolicitacao;
        }

        public function setObservacao($observacao){
            $this->observacao = $observacao;
        }
        public function getObervacao(){
            return $this->observacao;
        }

        public function setPrioridade($prioridade){
            $this->prioridade = $prioridade;
        }
        public function getPrioridade(){
            return $this->prioridade;
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