<?php

require_once "veiculo.class.php";
require_once "caminhao.class.php";
require_once "van.class.php";
require_once "motor.class.php";
require_once "encomenda.class.php";
require_once "rota.class.php";
require_once "centroDistribuicao.class.php";
require_once "visita.class.php";

$caminhao1 = new Caminhao("ENU5016", "Modelo1", 10, 3, "Fechado", "Diesel", "150cv");
$cd1 = new CentroDistribuicao("Cajamar");
$visita1 = new Visita("10/05/2026", 9, "Plataforma 1", $cd1, $caminhao1);

echo "<h1>Visita</h1>";
echo "<strong>Nome do CD:</strong> {$visita1->getCd()->getNomeCD()}<br>";
echo "<strong>Placa do Caminhao:</strong> {$visita1->getTruck()->getPlaca()}<br>";
echo "<strong>Modelo do Caminhao:</strong> {$visita1->getTruck()->getModelo()}<br>";
echo "<strong>Capacidade de Carga do Caminhao:</strong> {$visita1->getTruck()->getCapacidadeCarga()} toneladas<br>";
echo "<strong>Numero de eixos do Caminhao:</strong> {$visita1->getTruck()->getNumeroEixos()}<br>";
echo "<strong>Tipo de Carroceria do Caminhao:</strong> {$visita1->getTruck()->getTipoCarroceria()}<br>";
echo "<strong>Peso da Carga:</strong> {$visita1->getPeso()} toneladas <br>";
echo "<strong>Plataforma de Embarque:</strong> {$visita1->getPlataforma()}<br>";
echo "<strong>Data do Embarque:</strong> {$visita1->getData()}<br>";

?>

