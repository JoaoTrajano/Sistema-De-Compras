<?php

require_once "Conexao.class.php";

     class SolicitacaoDeCompras {

        private $codsolicitacao;
        private $codsolicitanteProduto;
        private $datasolicitacao;
        private $observacao;
        private $prioridade;

        public function getCodSolicitacao(){
            return $this->codsolicitacao;
        }

        public function setCodSolicitanteProduto($codsolicitanteProduto){
            $this->codsolicitanteProduto = $codsolicitanteProduto;
        }
        public function getCodsolicitanteProduto(){
            return $this->codsolicitanteProduto;
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

            $data = $this->getDataSolicitacao();
            $observacao = $this->getObervacao();
            $nivel_prioridade = $this->getPrioridade();
            $codsolicitanteProduto = $this->getCodsolicitanteProduto();
            
            $conexao = new Conexao('localhost','root','');
            $sql = "INSERT INTO tbsolicitacao(datasolicitacao,observacao,prioridade,codsolicitanteproduto) 
            VALUES('$data','$observacao','$nivel_prioridade','$codsolicitanteProduto')";

            $consulta = $conexao->consultar($sql);
            return $consulta;

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