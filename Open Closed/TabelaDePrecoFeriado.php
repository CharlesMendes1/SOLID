<?php 

class TabelaDePrecoFeriado implements InterfaceTabelaPreco{

	public function descontoPara($valor){
		if($valor > 5000) return 0.04;
    	if($valor > 1000) return 0.06;
   			return 0;
	}
	
}

 ?>