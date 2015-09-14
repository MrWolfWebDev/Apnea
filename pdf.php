<?php

set_include_path( $_SERVER['DOCUMENT_ROOT'] . '/mpdf/' );

include 'php/Table.class.php';

require('pdf/mpdf.php');

$mpdf = new mPDF();

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$corso = $_POST['corso'];
$luogo = $_POST['luogo'];
$periodo = $_POST['periodo'];

$email = $_POST['email'];
$cellulare = $_POST['cellulare'];

$datanascita = $_POST['datanascita'];
$cittanascita = $_POST['cittanascita'];
$codicefiscale = $_POST['codicefiscale'];

$cittaresidenza = $_POST['cittaresidenza'];
$capresidenza = $_POST['capresidenza'];
$viaresidenza = $_POST['viaresidenza'];

$annosportivo = $_POST['annosportivo'];


$mpdf->WriteHTML( "<div style='width:100%;text-align:center;'></div>" );
$mpdf->WriteHTML( "<h2 style='text-align:center; margin-top:50px; margin-bottom:50px;'>ISCRIZIONE CORSO CLUBAPNEA ASD</h2>" );
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%;'>Io sottoscritto $cognome $nome <br/><br/> chiedo di frequentare il corso di $corso <br/><br/> che si terrà presso $luogo<br/><br/> nel periodo dal/al $periodo</p>" );
$mpdf->WriteHTML( "<p style='margin-top:200px; width:80%; margin-left: 10%; text-align: left;'>Data " . date( "d-m-Y" ) . "<br><br><br><span style='margin-left:20%;'>Firma ___________________</span></p>");
$mpdf->WriteHTML( "<p style='margin-top:50px; width:80%; margin-left: 10%;'>SCADENZA CERTIFICATO MEDICO<br/>(da compilare a cura della segreteria)______________________</p>");
$mpdf->WriteHTML( "<p style='width:100%; bottom:0px; text-align:center;margin-top: 100px;'>CLUBAPNEA – VIA LANFRANCO DELLA PILA 27 - 20162 MILANO – P IVA 05896240966 </p>" );

$mpdf->AddPage();

$mpdf->WriteHTML( "<div style='width:100%;text-align:center;'></div>" );
$mpdf->WriteHTML( "<h2 style='text-align:center; margin-top:50px; margin-bottom:50px;'>ADESIONE A CLUBAPNEA ASD</h2>" );

$mpdf->WriteHTML( "<h2 style='text-align:center; margin-top:50px; margin-bottom:50px;'></h2>" );
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%;'>COGNOME: $cognome <br/>NOME: $nome<br/> <br/><br/></p>" );
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%; text-align: left;'>Nato a $cittanascita il $datanascita<br><br></p>");
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%; text-align: left;'>Residente in $cittaresidenza, CAP $capresidenza<br><br></p>");
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%; text-align: left;'>Via/Piazza $viaresidenza, TEL/CELL $cellulare<br><br></p>");
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%; text-align: left;'>E-mail $email<br><br><br></p>");
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%; text-align: left;'>CHIEDO DI ASSOCIARMI A CLUBAPNEA ASD PER L’ANNO SPORTIVO $annosportivo
<br>	e a tal fine dichiaro di aver preso visione delle relative norme e regolamenti, che accetto <br>	senza riserva alcuna e AUTORIZZO CLBAPNEA ASD ad utilizzare e gestire i dati personali e <br>	le immagini per fini istituzionali, anche attraverso strumenti informatici ai sensi della legge <br>sulla privacy N° 675-676/96, N° 196/2003 e successive modifiche.<br><br><br></p>" );
$mpdf->WriteHTML( "<p style='width:80%; margin-left: 10%; text-align: left;'>Data " . date( "d-m-Y" ) . "<br><br><br><span style='margin-left:20%;'>Firma ___________________</span></p>");
$mpdf->WriteHTML( "<p style='margin-top:50px; width:80%; margin-left: 10%;'>SCADENZA CERTIFICATO MEDICO<br/>(da compilare a cura della segreteria)______________________</p>");
$mpdf->WriteHTML( "<p style='width:100%; bottom:0px; text-align:center;margin-top: 100px;'>CLUBAPNEA – VIA LANFRANCO DELLA PILA 27 - 20162 MILANO – P IVA 05896240966 </p>" );

$mpdf->Output( "Iscrizione_$nome_$cognome.pdf", 'D' );

$iscrizioniDB = new Table( "iscrizioni" );

$iscrizioniDB->insert( array(
    "Nome" => $nome,
    "Cognome" => $cognome,
    "Corso" => $corso,
    "Luogo" => $luogo,
    "Periodo" => $periodo,

		"Email" => $email,
		"Cellulare" => $cellulare,

		"Datanascita" => $datanascita,
		"Cittanascita" => $cittanascita,
		"Codicefiscale" => $codicefiscale,

		"Cittaresidenza" => $cittaresidenza,
		"Capresidenza" => $capresidenza,
		"Viaresidenza" => $viaresidenza,

		"Annosportivo" => $annosportivo,

    "DataIns" => date( "Y-m-d" ),
        )
);

