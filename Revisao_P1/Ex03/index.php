<?php
/*
 * Comentario geral do arquivo:
 * Arquivo principal do Exercicio 03; monta uma agenda com cliente, servicos, itens e prestadores.
 *
 * Relacionamentos demonstrados:
 * - Heranca: Cliente e Prestador herdam de Pessoa.
 * - Composicao: Agenda cria objetos Itens.
 * - Associacao/agregacao: Agenda, Itens, Cliente, Servico e Prestador se referenciam.
 */

require_once "pessoa.class.php";
require_once "cliente.class.php";
require_once "prestador.class.php";
require_once "agenda.class.php";
require_once "itens.class.php";
require_once "servico.class.php";

$cliente1 = new Cliente("José", "(14)-91234-5678", "218449678-24");
$servico1 = new Servico("Barba", 70.00);
$prestador1 = new Prestador("Matheus", "(14)-98128-1755", "Barbeiro");
$agenda = new Agenda("15/05/2026", $cliente1, "10:00", "Ativo", $servico1, $prestador1);
$servico2 = new Servico("Cabelo", 75.00);
$prestador2 = new Prestador("Seu Duardo", "(14)-982345-6789", "Cabelereiro");
$agenda->setItens("11:00", "Cancelado", $servico2, $prestador2);

echo "<h1> Agenda: </h1>";
echo "<strong>Cliente:</strong> {$agenda->getCliente()->getNome()}<br>";
echo "<strong>Celular:</strong> {$agenda->getCliente()->getCelular()}<br>";
echo "<strong>CPF:</strong> {$agenda->getCliente()->getCpf()}<br>";
echo "<strong>Data:</strong>{$agenda->getData()}<br><br>";
echo "<h1>Serviço:<//h1>";
    foreach($agenda->getItens() as $indice=>$item) { // cuidado com o IGUAL

        echo "<h3> Item" . $indice + 1 . "</h3>";
        echo "Horário: {$item->getHorario()}<br>";
        echo "Status: <strong>{$item->getStatus()}</strong><br>";
        echo "Serviço: {$item->getServico()->getDescritivo()}<br>";
        echo "Preço: R$ " . number_format($item->getServico()->getPreco(),2,",", ".") . "<br>";
        echo "Prestador: {$item->getPrestador()->getNome()}<br>";
        echo "Celular:";
        echo "<ul><li>{$item->getPrestador()->getCelular()}</li></ul>";
        echo "Especialidade: {$item->getPrestador()->getEspecialidade()}<br>";
    }

?>


