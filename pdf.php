<?php

set_include_path( $_SERVER['DOCUMENT_ROOT'] . '/mpdf/' );

require('pdf/mpdf.php');

$mpdf = new mPDF();

$name = $_POST( 'name' );


$mpdf->WriteHTML( '<table width="100%"><tr><td align="center"><img src="img/logo.png" height="150px" width="150px"></td></tr><tr><td align="center" style="font-size:10px;">Via Montenotte, 6r<br>17100 Savona (SV) Italy 019 840 2539</td></tr></table>' );
$mpdf->WriteHTML( '<h1>' . $array["Titolo"] . '</h1>' );

$gp = substr( $array["DataPartenza"], 8, 2 );
$mp = substr( $array["DataPartenza"], 5, 2 );
$ap = substr( $array["DataPartenza"], 0, 4 );

$ga = substr( $array["DataArrivo"], 8, 2 );
$ma = substr( $array["DataArrivo"], 5, 2 );
$aa = substr( $array["DataArrivo"], 0, 4 );

$mpdf->WriteHTML( "<p id=\"data\">Dal: " . $gp . "/" . $mp . "/" . $ap . " - Al: " . $ga . "/" . $ma . "/" . $aa . "</p>" );


$mpdf->WriteHTML( '<table><tr><td width="400"><img src="img/cover/' . $id . '.jpg" width="300"></td><td width="400">' . $array["Descrizione"] . '</td></tr></table>' );

$ninteri = strlen( $array["Prezzo"] ) - 3;
$decimali = substr( $array["Prezzo"], $ninteri + 1, 2 );
$interi = substr( $array["Prezzo"], 0, $ninteri );


$mpdf->WriteHTML( '<table><tr><td width="400"><p>Note:</p><p>' . $array["NotePrezzo"] . '</p><br><br>' . $array["Note"] . '</td></tr><tr><td></td></tr><tr><td><b><font size="24">Prezzo per persona:</font> <span id="interi" >' . $interi . '</span><span id="decimali">,' . $decimali . '</span> €</b></font></p></td></tr></table>' );

$mpdf->Output( 'Prova' . '.pdf', 'D' );
