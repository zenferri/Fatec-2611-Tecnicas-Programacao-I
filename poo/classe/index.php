<?php

require_once "produto.class.php";
require_once "produto2.class.php";
require_once "produto3.class.php";
require_once "fornecedor.class.php";
//usa o construtor padrão da linguagem PHP

$produto1 = new Produto();

// atribuindo valores para os atributos da classe produto
$produto1->nome = "Lápis";
$produto1->preco = 0.50;

// usando o construtor definido na classe 
// passando parâmetros por valor (seguir a ordem de definição do construtor)
$produto2 = new Produto2("Caderno", 25.40);
// passando parâmetros por referência (não precisa usar a sequência definida no construtor)
$produto3 = new Produto2(preco: 12.50, nome: "Brracha");

//mostrar dados que estao no objeto
echo "objeto - Produto 1 - {$produto1->nome}<br>";
echo "objeto - Produto 2 - {$produto2->nome}<br>";

$produto3->Exibir();
$produto2->Exibir();

//classe produto 3

// criamos um objeto da classe produto3, que os atributos são privados e metodos públicos.

$produto4 = new Produto3("Agenda", 50);

// acessamos o valor do atributo nome por meio de um método get, porque o atributo é privado e não pode ser acessado fora da classe. 
echo $produto4->getNome() . "<br>";

// solicitou a alteracao do valor do atributo nome por meio de um método set, porque o atributo é privado e não pode ser acessado fora da classe. 
$produto4->setNome("Agenda 2026");

// concatenação
echo $produto4->getNome() . "<br>";

// interpolação
echo "Nome do produto: {$produto4->getNome()}<br>
Preço: R$ {$produto4->getPreco()}<br>";

/* echo "<pre>";
var_dump($produto1);
echo "</pre>";

echo "<pre>";
var_dump($produto2);
echo "</pre>";

echo "<pre>";
var_dump($produto3);
echo "</pre>"; */

$fornecedor1 = new Fornecedor ("ZenFerri", "1234", "14981281755", "zenferri@gmail.com");

$fornecedor1->Exibir();