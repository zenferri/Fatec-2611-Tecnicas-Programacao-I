<?php
/*
 * Comentario geral do arquivo:
 * Arquivo principal do gabarito do Exercicio 02; cria receita, chef, avaliador e avaliacao.
 */

    require_once "Pessoa.class.php";
    require_once "Telefone.class.php";
    require_once "Avaliador.class.php";
    require_once "Chef.class.php";
    require_once "Receita.class.php";
    require_once "Avaliacao.class.php";

    $chef = new Chef("Ana Maria Braga", 11, "999999999", "Confeitaria");
    $chef->setTelefones(21, "98765987");
    $receita = new Receita("Brigadeiro de Cajamanga", "Suco de cajamanga e leite condensado", $chef);
    $avaliador = new Avaliador("Henrique Fogaça", 11, "997685554", "111.111.111-11");
    $avaliador->setTelefones(22, "98888888888");
    $avaliacao = new Avaliacao(8.5, $avaliador ,$receita);

    //mostrando os dados da avaliação

    echo "<h1>AVALIAÇÃO</h1><br>";
    echo "<h3>Receita Avaliada - {$avaliacao->getReceita()->getNome()} - Nota: {$avaliacao->getNota()}</h3><br>";
    echo "Ingredientes: {$avaliacao->getReceita()->getIngredientes()}<br>";
    echo "<h4>Chef Responsável</h4>";
    echo "Nome: {$avaliacao->getReceita()->getChef()->getNome()}<br>";
    echo "Especialidade: {$avaliacao->getReceita()->getChef()->getEspecialidade()}<br>";
    echo "<h5>Telefones do Chef</h5>";
    foreach($avaliacao->getReceita()->getChef()->getTelefones() as $telefone){
        echo "({$telefone->getDdd()}) {$telefone->getNumero()}<br>";
    }
    echo "<h4>Avaliador Responsável</h4>";
    echo "Nome: {$avaliacao->getAvaliador()->getNome()}<br>";
    echo "CPF: {$avaliacao->getAvaliador()->getCpf()}<br>";
    echo "<h5>Telefones do Avaliador</h5>";
    foreach($avaliacao->getAvaliador()->getTelefones() as $telefone){
        echo "({$telefone->getDdd()}) {$telefone->getNumero()}<br>";
    }



?>