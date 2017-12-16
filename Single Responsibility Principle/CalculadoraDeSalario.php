<?php 
class CalculadoraDeSalario {

        public function calcula(Funcionario $funcionario) {
            //var_dump($funcionario);
            return $funcionario->getCargo()->getDesconto()->calcula($funcionario);
            

        }

       

        

    }
?>