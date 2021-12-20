
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr">
<head>
<meta charset="UTF-8">
	<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />

	<title>panel</title>
</head>

<body>
<a href="ekle.php" target="_blank"><h1 align="center">Makale eklemek için tıklayınız</h1></a>
<a href="mesajlar.php" target="_blank"><h1 align ="center">Mesajları görüntülemek için tıklayınız</h1></a>
<a href="uye_listesi.php" target="_blank"><h1 align="center">Üye işlemleri için tıklayınız</h1></a>
  
</body>

</html>

<div align="center">


<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "<br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}



?>

</div>

