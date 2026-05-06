<?php
// Arquivo de uso/execução das classes.
// Herança utilizada: Cliente e Contrato herdam de Pessoa.
// Composição utilizada: Pessoa cria Telefone internamente.
// Agregação/Associação utilizadas: Festa associa/agrega Cliente, Contrato e Decoracao.

require_once 'pessoa.class.php'; // importa a classe Pessoa e deve vir antes das classes filhas (Cliente, Contrato, Festa, Decoracao)

require_once 'cliente.class.php';
require_once 'contrato.class.php';
require_once 'festa.class.php';
require_once 'decoracao.class.php';
require_once 'telefone.class.php';

$cliente = new Cliente("218.456.789-00", "João da Silva", array(), 14, "98888-2222");
$contrato = new Contrato("12.345.678/0001-99", array(), "Eventos Alegria", array(), 14, "3333-4444");
$decoracao = new Decoracao("Rei Leao");

// instanciar um objeto Festa e passar os objetos cliente, contrato e decoracao como parâmetros
$festa = new Festa("10/04/2026", "15/06/2026", 5000, $cliente, $contrato, $decoracao);

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
echo '<p><strong>Nome:</strong> ' . $festa->getContrato()->getNome() . '</p>';
echo '<p><strong>CNPJ:</strong> ' . $festa->getContrato()->getCnpj() . '</p>';
echo '<p><strong>Telefones:</strong></p><ul>';
foreach ($festa->getContrato()->getTelefones() as $telefone) {
    echo '<li>(' . $telefone->getDdd() . ') ' . $telefone->getNumero() . '</li>';
}
echo '</ul>';

echo '<h3>Decoração</h3>';
echo '<p><strong>Descritivo:</strong> ' . $festa->getDecoracao()->getDescritivo() . '</p>'; 

?>


