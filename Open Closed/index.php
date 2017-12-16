<?php 
function carregadorClasse($class){
	require_once $class.".php";
}
spl_autoload_register("carregadorClasse");


$compra = new Compra();
$compra->AddItem(new Produto("Amaciante",20));
$compra->AddItem(new Produto("Esponja",25));
$compra->setCidade("sao paulo");

$calculadora = new CalculadoraDePrecos();
echo $calculadora->calcula($compra,new TabelaDePrecoFeriado,new Frete);


 ?>