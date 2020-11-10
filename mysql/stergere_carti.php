<?php
//Stergerea tabelelor

$con= mysql_connect('info.tm.edu.ro:3360', 'junea', 'xxxxxx');
if (!$con) {
    die('Conexiune esuata ' . mysql_error());
}
// selectarea bazei de date curente
mysql_select_db('junea', $con);


$result = mysql_query('DROP TABLE Carti');
if (!$result) {
    die('Tabela CARTI nu a putut fi stearsa: ' . mysql_error());
}
?>