<?php
$con = mysql_connect("info.tm.edu.ro:3360", "junea", "xxxxxx");
if (!$con) {
    die('Conexiune esuata ' . mysql_error());
}
// selectarea bazei de date curente
$db_selected = mysql_select_db("junea", $con);
//$select * from angajat;
die('Conexiune corecta ');

?>
