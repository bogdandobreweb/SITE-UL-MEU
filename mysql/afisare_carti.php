<?php

/*conectarea la server si la baza de date se realizeaza prin functia conectare.php
$con = mysql_connect("info.tm.edu.ro:3360","junea","XXXXXX");
if (!$con)
  {
  die('nu se poate conecta: ' . mysql_error());
  }

mysql_select_db("junea", $con);
*/

include "conectare.php";

$result = mysql_query("SELECT * FROM Carti");

echo "<table border=1 cellpadding=10>";
echo "<tr><td><b>Autor</b></td><td><b>Titlul</b></td><td><b>Editura</b></td><td><b>Cota</b></td></tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>" .
       "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
  echo "<br />";
  }

mysql_close($con);
?> 