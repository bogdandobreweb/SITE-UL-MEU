<?php
//include "conectare.php";
$con = mysql_connect("localhost","BDobre","bogditasymbol");// selectarea bazei de date curente
if (!$con) 
    die('Conexiune esuata '.mysql_error());
 echo "Conexiune cu succes!";
    
 mysql_select_db("BDobre", $con);
 echo "*DB selectata!";

 if(isset($_POST['send']))
     {
      $Nume=$_POST['Nume'];
      $Email=$_POST['Email'];
      $Comentariu=$_POST['Comentariu'];
      echo $autor, $titlul, $editura, $cota;
      echo "**date preluate"."<br>";
	  
      $sql=mysql_query("INSERT INTO Carti (Autor, Titlul, Editura, Cota) 
	  VALUES ('$autor', '$titlul', '$editura','$cota')");
	  
      if(!$sql) {
        echo "Error: " . $sql . "<br>" . $con->error;
        } else {
		echo "Am adaugat un articol!"."<br>";
        }
}
$result = mysql_query("SELECT * FROM Carti");

echo "<table border=1 cellpadding=10>";

echo  "<tr><td><b>Autor  </b></td>
           <td><b>Titlul cartii</b></td>
           <td><b>Editura </b></td>
           <td><b>Cota</b></td></tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>" .
       "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
  echo "</tr>";
  }
 echo "</table><br>";  

mysql_close($con);
?>
