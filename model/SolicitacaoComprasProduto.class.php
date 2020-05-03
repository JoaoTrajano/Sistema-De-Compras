<?php


    class SolicitacaoProduto{

        private $codsolicitacaoProduto;
        private $codProduto;
        private $quantidade;

        public function setCodSolicitacaoProduto($codsolicitacaoProduto){
            $this->codsolicitacaoProduto = $codsolicitacaoProduto;
        }
        public function getCodSolicitacoProduto(){
            return $this->codsolicitacaoProduto;
        }

        public function setCodProduto($codProduto){
            $this->codProduto = $codProduto;
        }
        public function getCodProduto(){
            return $this->codProduto;
        }

        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function getQuantidade(){
            return $this->quantidade;
        }

        public function inserir($codsolicitanteproduto,$codproduto,$quantidade){
            
            $conexao = new Conexao('localhost','root','');
            $sql = "INSERT INTO tbsolicitacao_produto(codsolicitanteproduto,codproduto,quantidade) 
            VALUES('$codsolicitanteproduto','$codproduto','$quantidade')";

            $consulta = $conexao->consultar($sql);
            return $consulta;

        }
    }
?>