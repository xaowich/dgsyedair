<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr">
<head>
	<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
 

	<title>Puan hesaplama</title>
</head>

<body>

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">		
		 
         <img src="logo33.png"  alt="logo" align="left" width="320" height="160"/>	
		 
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="index.php">Ana sayfa</a></li>
		  <li><a href="makaleler.php">Makaleler</a></li>
          <li class="selected"><a href="hesapla.php">Puan hesaplama</a></li>
          <li><a href="iletisim.php">İletişim</a></li>
        </ul>
      </div>
    </div>
	
	
<br/>
<br/>
<br/>
<br/>

<h1 align="center">DGS PUAN HESAPLAMA ARACI</h1>
<h3 align="center">ÖSYM Uyumlu DGS Puan Hesaplama aracı ile yapıcağınız netlere göre alabileceğiniz puanı öğrenebilirisiniz.</h3>

<br/>
<br/>



<table id="hesaplama" border="2" bordercolor="gray" align="center" cellspacing="5px">
	
<form action="hesapla.php" method="POST" >

<tr bgcolor="black">
<th><h3 align="center" >Sayısal doğru sayısı:<td><input type="text"  name="sayd"  ></h3></td></th>
</tr>

<tr>
<th><h3 align="center">Sayısal yanlış sayısı:<td><input type="text" name="sayy" ><br/></h3></td></th>
</tr>

<tr>
<th><h3 align="center">Sözel doğru sayısı:<td><input type="text" name="sözd" ><br/></h3></td></th>
</tr>

<tr>
<th><h3 align="center">Sözel yanlış sayısı:<td><input type="text" name="sözy" ><br/></h3></td></th>
</tr>

<tr>
<th><h3 align="center">ÖBP(önlisans başarı puanı):<td><input type="text" name="öbp" ><br/></h3></td></th>
</tr>

<tr>
<th>
<input type="submit" value="Hesapla" />
</th>
</tr>

</form>

</table>
















<div align="center">

<?php
$sayd=$_POST['sayd'];
$sayy=$_POST['sayy'];
$sözd=$_POST['sözd'];
$sözy=$_POST['sözy'];
$öbp=$_POST['öbp'];


$saynet=$sayd-($sayy/4);

$söznet=$sözd-($sözy/4);



$sayısal=(105.536+$saynet*1.575+$söznet*0.336+$öbp*1.73);
echo "<h3>Sayısal puanınız=$sayısal<br/></h3>";

$sözel=(87.747+$söznet*1.681+$saynet*0.315+$öbp*1.73);
echo "<h3>Sözel puanınız=$sözel<br/></h3>";

$ea=(96.642+$söznet*1.009+$saynet*0.945+$öbp*1.73);
echo "<h3>Eşit ağırlık puanınız=$ea<br/></h3>";




?>


</div>

<br/>
<br/>
<br/>



 




 
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Ana sayfa</a> | <a href="makaleler.php">Makaleler</a> | <a href="hesapla.php">Puan hesaplama</a> |  <a href="iletisim.php">İletişim</a></p>     
    </div>
  </div>
  
</body>

</html>