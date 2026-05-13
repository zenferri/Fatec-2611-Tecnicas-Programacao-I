<?php
/*
 * Comentario geral do arquivo:
 * Arquivo principal do Exercicio 04; executa os exemplos de shopping, lojas, proprietarios e condominios.
 *
 * Relacionamentos demonstrados:
 * - Heranca: Shopping e Proprietario herdam de Pessoa.
 * - Associacao: Condominio aponta para Loja, Loja aponta para Shopping.
 * - Agregacao: Loja recebe Proprietario e Shopping criados fora dela.
 * - Composicao: Loja cria Condominio pelo metodo setCondominio().
 */

require_once "pessoa.class.php";
require_once "shopping.class.php";
require_once "proprietario.class.php";
require_once "loja.class.php";
require_once "condominio.class.php";

$proprietario1 = new Proprietario("Marcos Vilela", "111.111.111-11");
$proprietario2 = new Proprietario("Carolina Vilela", "222.222.222-22");

$shopping = new Shopping("Jahu Boulevard", "11.111.111/0001-11");
$loja = new Loja(2, "P12", array($proprietario1, $proprietario2), $shopping);

$shopping->setLoja($loja);
$proprietario1->setLoja($loja);
$proprietario2->setLoja($loja);

$loja->setCondominio("05/05/2026", 540.00, "10/05/2026");
$condominio = $loja->getCondominios()[0];

echo "<h1>CONDOMINIO</h1>";
echo "<h2>Shopping</h2>";
echo "Nome: {$condominio->getLoja()->getShopping()->getNome()} - CNPJ: {$condominio->getLoja()->getShopping()->getCnpj()}<br>";

echo "<h3>Loja</h3>";
echo "Lotes: {$condominio->getLoja()->getLotes()} - Numero: {$condominio->getLoja()->getNumero()}<br>";

echo "<h4>Proprietarios</h4>";
foreach ($condominio->getLoja()->getProprietarios() as $indice => $proprietario) {
    echo "<h5>Proprietario " . ($indice + 1) . "</h5>";
    echo "Nome: {$proprietario->getNome()} - CPF: {$proprietario->getCpf()}<br>";
    echo "<br>--------------------------------------------------------<br>";
}

echo "<h3>Condominio da Loja</h3>";
echo "Data da Geracao: {$condominio->getDataGeracao()}<br>";
echo "Data do Pagamento: {$condominio->getDataPagamento()}<br>";
echo "Valor: R$ " . number_format($condominio->getValor(), 2, ",", ".") . "<br>";

?>
