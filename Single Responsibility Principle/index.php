<?php 
 function carregaClasse($class){
	require_once $class.".php";
}
spl_autoload_register("carregaClasse");

$funcionario = new Funcionario("Charles",new Desenvolvedor(new DezOuVintePorcento()),3500);
$calcula = new CalculadoraDeSalario();
echo $calcula->calcula($funcionario);


 ?>