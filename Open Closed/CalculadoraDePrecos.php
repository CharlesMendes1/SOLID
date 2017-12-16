<?php 
class CalculadoraDePrecos{
	public function calcula(Compra $produto,InterfaceTabelaPreco $tabela, Transporta $vai) {
       /*
        $tabela = new TabelaDePrecoPadrao();
        $correios = new Frete();
		*/
        $desconto = $tabela->descontoPara($produto->getValor());
        $frete = $vai->para($produto->getCidade());
        

        return $produto->getValor() * (1-$desconto) + $frete;
    }
}

 ?>