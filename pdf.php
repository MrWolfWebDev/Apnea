<?php

set_include_path( $_SERVER['DOCUMENT_ROOT'] . '/mpdf/' );

include 'php/Table.class.php';

require('pdf/mpdf.php');

$mpdf = new mPDF();

var_dump($_POST);
$nome = $_POST['nome'];
echo $nome;
$cognome = $_POST['cognome'];
echo $cognome;
$corso = $_POST['corso'];
echo $corso;
$luogo = $_POST['luogo'];
echo $luogo;
$periodo = $_POST['periodo'];
echo $periodo;

$iscrizioniDB = new Table( "iscrizioni" );

$iscrizioniDB->insert( array(
    "Nome" => $nome,
    "Cognome" => $cognome,
    "Corso" => $corso,
    "Luogo" => $luogo,
    "Periodo" => $periodo,
    "DataIns" => date( "Y-m-d" ),
        )
);

$mpdf->WriteHTML( "<h2 style='text-align:center;'>ISCRIZIONE CORSO CLUBAPNEA ASD" );
$mpdf->WriteHTML( "<p>Io sottoscritto $cognome $nome </p>" );
$mpdf->WriteHTML( "<p>chiedo di frequentare il corso di $corso</p>" );
$mpdf->WriteHTML( "<p>che si terrà presso $luogo</p>" );
$mpdf->WriteHTML( "<p>nel periodo dal/al $periodo</p>" );

$mpdf->AddPage();

$mpdf->Output( "Iscrizione_$nome_$cognome.pdf", 'D' );
