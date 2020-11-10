<!DOCTYPE HTML>
<html>

<head>
  <title>Swim Shop</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html">Swim<span class="logo_colour">Shop</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="examples.html">Barbati</a></li>
          <li><a href="page.html">Femei</a></li>
          <li><a href="another_page.html">Copii</a></li>
		  <li><a href="accesorii.html">Accesorii</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner"></div>
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>CUM ALEG UN PRODUS?</h3>
			<h3>CUM COMAND?</h3>
            <h3>CUM PLATESC?</h3>
            <p><br /><a href="utile.html">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>BRANDURI</h3>
            <ul>
              <li><a href="arena.html">ARENA</a></li>
              <li><a href="tyr.html">TYR</a></li>
              <li><a href="finis.html">FINIS</a></li>
              <li><a href="funky.html">FUNKY TRUNKS</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Cauta</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" placeholder="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h1>DETALII</h1> 
		<form action="" method="post">
          <div class="form_settings">
            <p><span>Nume</span><input class="contact" type="text" name="your_name" value="" /></p>
            <p><span>Email</span><input class="contact" type="text" name="your_email" value="" /></p>
            <p><span>Comentariu</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" /></p>
			
          </div> 
		</form>
      </div>
    </div>
    <div id="content_footer"></div>
	 <div id="footer">
    <p><a href="index.html">Home</a> | <a href="examples.html">Barbati</a> | <a href="page.html">Femei</a> | <a href="another_page.html">Copii</a> | <a href="accesorii.html">Accesorii</a> | <a href="contact.php">CONTACT</a></p>
    </div>
  </div>
</body>
</html>

<?php

$x=mysql_connect("localhost", "BDobre", "bogditasymbol");
 if(!$x)
     die ('Nu s-a realizat conectarea'.mysql_error());

mysql_select_db("form", $x);
if(isset($_POST['submit']))
{ $nume=$_POST['your_name'];
  $email=$_POST['your_email'];
  $comment=$_POST['your_enquiry'];
        
 $z=mysql_query("INSERT INTO BDobre.Swim (Nume,Email,Comentariu) 
 VALUES ('$nume','$email', '$comment')",$x);
 if(!$z)
           die('Inserarea nu a putut fi realizata'.mysql_error());
echo 'Inserarea s-a realizat!';  header("location:contact.php?action=trimis");}  

if(isset($_GET['action'])){

     if ($_GET['action']=="trimis") {
		echo '<script type="text/javascript">alert("Formularul a fost completat cu succes. O zi buna!");</script>';
      
     }

    }  
mysql_close($x);
?>