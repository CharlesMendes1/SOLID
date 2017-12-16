<?php 
class Compra{
	private $itens;
	private $valor;
	private $cidadeEntrega;

	public function __construct(){
		$this->valor = 0;
		$this->itens = array();
	}
	public function getItens(){
	    return $this->itens;
	}

	public function AddItem(Produto $item){
	    //vai entrar um objeto
	    $this->itens[] = $item;
	    $this->valor += $item->getValor(); 
	}

	public function getValor(){
	    return $this->valor;
	}

	public function getCidade(){
	    return $this->cidadeEntrega;
	}
	
	public function setCidade($cidade){
	    $this->cidadeEntrega = $cidade;
	}
	

}


 ?>