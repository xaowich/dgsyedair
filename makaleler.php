<?php
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
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


	<title>Makaleler</title>
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
		  <li  class="selected"><a href="makaleler.php">Makaleler</a></li>
          <li><a href="hesapla.php">Puan hesaplama</a></li>         
          <li><a href="iletisim.php">İletişim</a></li>
        </ul>
      </div>
    </div>
  
<div>

<br/>
<br/>


 <?php

            $sorgu = $baglanti->prepare("SELECT * FROM makale");// Makale tablosundaki tüm verileri çekiyoruz.
            $sorgu->execute();

            while ($sonuc = $sorgu->fetch()) {

                $id = $sonuc['id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
                $foto = $sonuc['foto'];
                $baslik = $sonuc['baslik'];
                $icerik = $sonuc['icerik'];

// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
                ?>
                 <div align="center">
                <tr>
                    
                    <td><img width="550px" src="images/<?php echo $foto; ?>" alt=""></td>
                    <h1><td><?php echo  $baslik; ?></td><br></h1> 
                    <h3><td><?php echo $icerik; ?></td><br><br></h3>
                  
                </tr>
                 </div> 
				 <br>
				 <br>
            <?php } // Tekrarlanacak kısım bittikten sonra PHP tagının içinde while döngüsünü süslü parantezi kapatarak sonlandırıyoruz.
            ?>



<br>
<br>








    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Ana sayfa</a> | <a href="makaleler.php">Makaleler</a>  | <a href="hesapla.php">Puan hesaplama</a>  | <a href="iletisim.php">İletişim</a></p>     
    </div>
  </div>
  
</body>

</html>