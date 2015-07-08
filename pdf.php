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

$mpdf->WriteHTML( "<div style='width:100%;text-align:center;'></div>" );
$mpdf->WriteHTML( "<h2 style='text-align:center; margin-top:50px; margin-bottom:50px;'>ISCRIZIONE CORSO CLUBAPNEA ASD</h2>" );
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%;'>Io sottoscritto $cognome $nome <br/><br/> chiedo di frequentare il corso di $corso <br/><br/> che si terrà presso $luogo<br/><br/> nel periodo dal/al $periodo</p>" );
$mpdf->WriteHTML( "<p style='margin-top:200px; width:80%; margin-left: 10%; text-align: left;'>Data " . date( "d-m-Y" ) . "<br><br><br><span style='margin-left:20%;'>Firma ___________________</span></p>");
$mpdf->WriteHTML( "<p style='margin-top:50px; width:80%; margin-left: 10%;'>SCADENZA CERTIFICATO MEDICO<br/>(da compilare a cura della segreteria)______________________</p>");
$mpdf->WriteHTML( "<p style='width:100%; bottom:0px; text-align:center;margin-top: 100px;'>CLUBAPNEA – VIA LANFRANCO DELLA PILA 27 - 20162 MILANO – P IVA 05896240966 </p>" );

$mpdf->Output( "Iscrizione_$nome_$cognome.pdf", 'D' );
