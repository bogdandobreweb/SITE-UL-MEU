<?php
$con = mysql_connect("localhost","BDobre","bogditasymbol");
if (!$con)
  {
  die('Nu s-a realizat conectarea: ' . mysql_error());
  }

/* Create database
if (mysql_query("CREATE DATABASE Dobre_1",$con))
  {
  echo "Baza de date creata";
  }
else
  {
  echo "Eroare la crearea bazei de date: " . mysql_error();
  }
*/

// Create table
mysql_select_db("BDobre", $con);
$sql = "CREATE TABLE Carti
(
Autor varchar(20),
Titlul varchar(30),
Editura varchar(20),
Cota int
)";if(!$sql)
echo "Tabela nu s-a creat";
else 
echo "Tabela creata";


// Execute query
if(mysql_query($sql,$con))
{
  echo "Tabela creata";
}

mysql_close($con);
?>  