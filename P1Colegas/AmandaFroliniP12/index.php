<?php
    require_once "Cambio.class.php";
    require_once "Etapa.class.php";
    require_once "Inscricoes.class.php";
    require_once "KartCadete.class.php";
    require_once "KartShifler.class.php";
    require_once "PilotoMirim.class.php";
    require_once "PilotoSenior.class.php";
    require_once "Telemetria.class.php";
    require_once "Veiculo.class.php";

    $kartcadete = new KartCadete("True or False", $pilotomirim);
    $kartshifler = new KartShifler(00.00, 0, 0);
    $etapa = new Etapa("Etapa 1", "13/05/2026", " ");
    $inscricoes = new Iscricoes("01", "600", $etapa, $kartshifler);
    $pilotomirim = new PilotoMirim("Gustavo Santos");
    $pilotosenior = new PilotoSenior("Amanda Frolini", "29/06/2006");
    $cambio = new Cambio("Cambio X", $kartshifler);
    $incricoes1->setInscricoes("12/05/2026", "600", $etapa, $kartshifler);
    $inscricoes2->setInscricoes("10/05/2026", "600", $etapa, $kartcadete);
    $telemetria->setTelemetria("Tipo B", "50");
    $veiculo->setVeiculo("Validade", 00.00);

    //mostrando os dados da iscricao

    echo "<h1>INSCRIÇÃO</h1><br>";
    echo "Numero: {$inscricoes->getNumero()}<br>";
    echo "Data: {$inscricoes->getData()}<br>";
    echo "Valor: {$inscricoes->getValor()}<br>";
    
    echo "<h2>ITENS DA INSCRIÇÃO</h2>";
    foreach($inscricoes->getEtapa() as $indice=>$etapa) {}
    
?>