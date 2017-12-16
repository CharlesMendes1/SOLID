<?php 
//Fatura pode ser um forma de cobrança ou de alerta para o devedor
//boleto sai geralmente junto com a faltura
function carregaClasse($class){
	require_once $class.".php";
}
spl_autoload_register("carregaClasse");

$listaBoleto = array();
$listaBoleto[] = new Boleto(500);
$listaBoleto[] = new Boleto(1000);
$listaBoleto[] = new Boleto(1000);
$fatura1 = new Fatura("Charles",2500);
 $processador = new ProcessadorDeBoletos();
 $processador->processa($listaBoleto,$fatura1);
var_dump($fatura1);

 ?>