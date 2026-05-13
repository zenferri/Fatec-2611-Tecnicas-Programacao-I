<?php 
/*
 * Comentario geral do arquivo:
 * Arquivo principal do Exercicio 02; cria chef, avaliador, receita e avaliacao para exibir o resultado.
 *
 * Relacionamentos demonstrados:
 * - Heranca: Chef e Avaliador herdam de Pessoa.
 * - Composicao: Pessoa cria objetos Telefone.
 * - Associacao/agregacao: Receita, Chef, Avaliador e Avaliacao se referenciam.
 */

 
require_once "pessoa.class.php";
require_once "telefone.class.php";
require_once "chef.class.php";
require_once "avaliador.class.php";
require_once "receita.class.php";
require_once "avaliacao.class.php";

// Vamos instanciar um objeto da classe Avaliacao e mostrar todoos os dados desse objeto

$chef1 = new Chef("confeiteiro", array(), "José", array(), 14, "98128-1755");
$avaliador1 = new Avaliador("218.449.678-24", array(), "Geraldo", array(), 14, "91234-5678");
$receita1 = new Receita("Bolovo", "ovo com carne e massa");

$avaliacao1 = new Avaliacao(9.5, $chef1, $receita1, $avaliador1);

echo "<h1>Avaliação</h1>";
echo "Chef: {$avaliacao1->getChef()->getNome()}<br>";
echo "Telefones do Chef:<br>";

foreach ($avaliacao1->getChef()->getTelefones() as $tel) {
    echo "<ul><li>({$tel->getDdd()}) {$tel->getNumero()}</li></ul>";
}

echo "Receita: {$avaliacao1->getReceita()->getNome()}<br>";
echo "Ingredientes: {$avaliacao1->getReceita()->getIngredientes()}<br>";
echo "Avaliador: {$avaliacao1->getAvaliador()->getNome()}<br>";
echo "CPF do Avaliador: {$avaliacao1->getAvaliador()->getCpf()}<br>";
echo "<p><strong>Nota de avaliação: {$avaliacao1->getNota()}</strong><br>";
?>