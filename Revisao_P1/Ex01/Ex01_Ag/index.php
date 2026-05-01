<?php
require_once 'pessoa.class.php';
require_once 'festa.class.php';
require_once 'decoracao.class.php';
require_once 'telefone.class.php';
require_once 'cliente.class.php';
require_once 'contrato.class.php';

$cliente = new Cliente('Joao da Silva', '123.456.789-00');
$cliente->addTelefone(new Telefone(41, '99999-1111'));
$cliente->addTelefone(new Telefone(41, '98888-2222'));

$contratado = new Contratado('Eventos Alegria', '12.345.678/0001-99');
$contratado->addTelefone(new Telefone(41, '3333-4444'));

$decoracao = new Decoracao('Tema tropical com arranjos florais');

$festa = new Festa('2026-01-10', '2026-02-15', 5500.00, $cliente, $contratado, $decoracao);

echo '<h2>Dados da Festa</h2>';
echo '<p><strong>Data do contrato:</strong> ' . $festa->getDataContrato() . '</p>';
echo '<p><strong>Data da festa:</strong> ' . $festa->getDataFesta() . '</p>';
echo '<p><strong>Valor:</strong> R$ ' . number_format($festa->getValor(), 2, ',', '.') . '</p>';

echo '<h3>Cliente</h3>';
echo '<p><strong>Nome:</strong> ' . $festa->getCliente()->getNome() . '</p>';
echo '<p><strong>CPF:</strong> ' . $festa->getCliente()->getCpf() . '</p>';
echo '<p><strong>Telefones:</strong></p><ul>';
foreach ($festa->getCliente()->getTelefones() as $telefone) {
    echo '<li>(' . $telefone->getDdd() . ') ' . $telefone->getNumero() . '</li>';
}
echo '</ul>';

echo '<h3>Contratado</h3>';
echo '<p><strong>Nome:</strong> ' . $festa->getContratado()->getNome() . '</p>';
echo '<p><strong>CNPJ:</strong> ' . $festa->getContratado()->getCnpj() . '</p>';
echo '<p><strong>Telefones:</strong></p><ul>';
foreach ($festa->getContratado()->getTelefones() as $telefone) {
    echo '<li>(' . $telefone->getDdd() . ') ' . $telefone->getNumero() . '</li>';
}
echo '</ul>';

echo '<h3>Decoracao</h3>';
echo '<p><strong>Descritivo:</strong> ' . $festa->getDecoracao()->getDescritivo() . '</p>';
