
<?php
$con = mysql_connect("localhost", "BDobre", "bogditasymbol");
if (!$con) {
    die('Conexiune esuata ' . mysql_error());
}
 die('Conexiune realizara ');
// selectarea bazei de date curente
$db_selected = mysql_select_db("junea", $con);
?>

