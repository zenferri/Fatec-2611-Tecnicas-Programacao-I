<?php

//o require_once da classe pai deve vir primeiro que as classes filhos

require_once "pessoa.class.php";
require_once "robo.class.php";
require_once "arena.class.php";
require_once "juiz.class.php";
require_once "participante.class.php";
require_once "equipe.class.php";
require_once "campeonato.class.php";
require_once "inscricoes.class.php";



$participante = new Participante("Mecatronica","baixa","junior da silva", "junior@gmail.com");

$juiz = new juiz("Destruição","021f3-2d","Arnaldo","Arnaldo@gmail.com");



$robo = new Robo("Eva-01","pesado",7);

$equipe = new Equipe("Ikari","kyoto",$participante,array());

$arena = new Arena("Arena Internacional",80.000);

$campeonato = new Campeonato("Mundial de robos",2049,$arena);

$inscricoes = new Inscricoes("24/03/2049","Concluida",$equipe,$campeonato);



//mostrando os objetos 

echo "Luta de robos<br>";
echo "Nome da equipe: {$equipe->getNome_equipe()}<br>";
echo "Universidade: {$equipe->getUniversidade()}<br>";
echo "Participante: {$equipe->getParticipante()->getNome()}<br>";
echo "Curso do participante: {$equipe->getParticipante()->getCurso()}<br>";
echo "Experiencia do Participante: {$equipe->getParticipante()->getNivel_experiencia()}<br>";
echo "Participante email: {$equipe->getParticipante()->getEmail()} <br>";

//Não consegui fazer funcionar :(
foreach($equipe->getRobos() as $robo)
{
        echo "Nome: {$robo->getNome()} <br>";
        echo "Categoria: {$robo->getCategoria()} <br>";
        echo "Autonomia: {$robo->getAutonomia()} <br>";
}




echo "<br>";
echo "<br>";


echo "Juiz<br>";
echo "Especialidade: {$juiz->getEspecialidade()}<br>";
echo "Certificado: {$juiz->getCertificado()}<br>";

echo "<br>";


echo "Campeonato<br>";
echo "nome: {$campeonato->getNome_campeonato()}<br>";
echo "Temporada: {$campeonato->getTemporada()}<br>";
echo "Arena: {$campeonato->getArena()->getNome_arena()}<br>";
echo "Capacidade da Arena: {$campeonato->getArena()->getCapacidade()}<br>";

echo "<br>";

echo "Inscrições<br>";
echo "Data: {$inscricoes->getData_inscricao()}<br>";
echo "status: {$inscricoes->getStatus()}<br>";
echo "Equipe: {$inscricoes->getEquipe()->getNome_equipe()}<br>";
echo "Campeonato: {$inscricoes->getCampeonato()->getNome_campeonato()}<br>";











