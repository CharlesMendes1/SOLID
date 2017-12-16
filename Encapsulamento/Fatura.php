<?php 
class Fatura {

        private $cliente;
        private $valor;
        private $pagamentos;
        private $pago;

        public function __construct($cliente,$valor) {
            $this->cliente = $cliente;
            $this->valor = $valor;
            $this->pagamentos = array();
            $this->pago = false;
        }

        public function getCliente() {
            return $this->cliente;
        }

        public function getValor() {
            return $this->valor;
        }

        public function getPagamentos() {
            return $this->pagamentos;
        }

        public function addPagamento(Pagamento $pagamento) {
            $this->pagamentos[] = $pagamento;

            if($this->totalPagamento() >= $this->valor){
            	$this->pago = true;
            }
        }
        private function totalPagamento(){
        	$total = 0;
        	foreach ($this->pagamentos as $pagamento) {
        		$total+= $pagamento->getValor(); 
        	}
        	return $total;
        }

        public function isPago() {
            return $this->pago;
        }

        public function setPago($pago) {
            $this->pago = $pago;
        }
    }
 ?>