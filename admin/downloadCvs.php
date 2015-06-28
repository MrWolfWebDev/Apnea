<?php

include '../php/Table.class.php';

header( "Content-Type: text/css; name=utenti.csv" );
header( "Content-Disposition: attachment; filename=utenti.csv" );

$table = new Table( "iscrizioni" );

echo( implode( "\n", $table->fetchAll() ) );
