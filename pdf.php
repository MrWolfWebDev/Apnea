<?php

set_include_path( $_SERVER['DOCUMENT_ROOT'] . '/mpdf/' );

require('pdf/mpdf.php');

$mpdf = new mPDF();

$name = $_POST( 'nome' );
$cognome = $_POST( 'cognome' );
$corso = $_POST( 'corso' );
$luogo = $_POST( 'luogo' );
$periodo = $_POST( 'periodo' );

$mpdf->WriteHTML( "<h2 style='text-align:center;'>ISCRIZIONE CORSO CLUBAPNEA ASD" );
$mpdf->WriteHTML( "<p>Io sottoscritto $cognome $nome </p>" );
$mpdf->WriteHTML( "<p>chiedo di frequentare il corso di $corso</p>" );
$mpdf->WriteHTML( "<p>che si terrà presso $luogo</p>" );
$mpdf->WriteHTML( "<p>nel periodo dal/al $periodo</p>" );

$mpdf->AddPage();

$mpdf->Output( "Iscrizione_$nome_$cognome.pdf", 'D' );
