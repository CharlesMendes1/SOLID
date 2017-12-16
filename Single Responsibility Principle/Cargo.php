<?php 

class Cargo{
	private $desconto;

	  public function __construct(CalculaDesconto $desconto){
	  	$this->desconto = $desconto;
	  }

	public function getDesconto(){
	    return $this->desconto;
	}
	
}

 ?>