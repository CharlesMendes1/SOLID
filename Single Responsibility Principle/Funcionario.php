<?php 

class Funcionario {

        private $id;
        private $nome;
        private $cargo;
        private $dataAdmisao;
        private $salario;

        public function __construct($nome,Cargo $cargo,$salario){
            $this->nome = $nome;
            $this->cargo = $cargo;
            //$this->dataAdmissao = $dataAdmissao;
            $this->salario = $salario;
        }

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCargo() {
            return $this->cargo;
        }

        public function getDataAdmisao() {
            return $this->dataAdmisao;
        }

        public function getSalario() {
            return $this->salario;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setNome($novoNome) {
            $this->nome = $novoNome;
        }


        public function setDataAdmisao(DateTime $data) {
            $this->dataAdmisao = $data;
        }

        public function setSalario($salario) {
            $this->salario = $salario;
        }

        public function CalculaSalario(){
             $cargo->getDesconto()->calcula(this);
        }


    }

 ?>