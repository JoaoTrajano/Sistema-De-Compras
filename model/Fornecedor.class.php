<?php


    class Fornecedor{

        private $codfornecedor;
        private $nomeFornecedor;
        private $cnpj;

        public function setCodFornecedor($codfornecedor){
            $this->codfornecedor = $codfornecedor;
        }
        public function getCodFornecedor(){
            return $this->codfornecedor;
        }

        public function setNomeFornecedor($nomeFornecedor){
            $this->nomeFornecedor = $nomeFornecedor;
        }
        public function getNomeFornecedor(){
            return $this->nomeFornecedor;
        }

        public function setCNPJ($cnpj){
            $this->cnpj = $cnpj;
        }
        public function getCNPJ(){
            return $this->cnpj;
        }
    }
?>