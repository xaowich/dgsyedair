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


	<title>İletişim</title>
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
          <li><a href="hesapla.php">Puan hesaplama</a></li>         
          <li  class="selected"><a href="iletisim.php">İletişim</a></li>
        </ul>
      </div>
    </div>
  
<div>

<br/>
<br/>






<br/>
<br/>
<br/>


<div id="gif" align="center">
<img src="images/text.gif" align="center" />
</div>

<br>
<br>



<h1>Bizimle iletişime geçin.</h1>


<table id="hesaplama2" border="2"  >
<form action="" method="post">
<tr>
    <th>Adınız soyadınız:</th>
    <td><input type="text" name="kisi_isim" required="required" /><br /><br/></td>
</tr>
<tr>
    <th>E-posta adresiniz:</th>
    <td><input type="email" name="kisi_eposta" required="required" /><br /><br/></td>
</tr>
<tr>
    
    <th>Mesajınız:</th>
    <td><textarea name="kisi_mesaj" rows="10" cols="30" />
	</textarea>
</tr>
<tr>
<th>
    <input type="submit" value="GÖNDER" />
</th>
</tr>
</form>
</table>

<?php
if (isset($_POST['kisi_isim'], $_POST['kisi_eposta'], $_POST['kisi_mesaj'])) {

    $kisi_isim = trim(filter_input(INPUT_POST, 'kisi_isim', FILTER_SANITIZE_STRING));
    $kisi_eposta = trim(filter_input(INPUT_POST, 'kisi_eposta', FILTER_SANITIZE_STRING));
    $kisi_mesaj = trim(filter_input(INPUT_POST, 'kisi_mesaj', FILTER_SANITIZE_EMAIL));

    if (empty($kisi_isim) || empty($kisi_eposta) || empty($kisi_mesaj)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    if (!filter_var($kisi_eposta, FILTER_VALIDATE_EMAIL)) {
        die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }

    try {

        $baglanti = new PDO("mysql:host=localhost;dbname=kisi", "root", "usbw");
        $baglanti->exec("SET NAMES utf8");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sorgu = $baglanti->prepare("INSERT INTO kisiler(kisi_isim, kisi_eposta, kisi_mesaj) VALUES(?, ?, ?)");
        $sorgu->bindParam(1, $kisi_isim, PDO::PARAM_STR);
        $sorgu->bindParam(2, $kisi_eposta, PDO::PARAM_STR);
        $sorgu->bindParam(3, $kisi_mesaj, PDO::PARAM_STR);

        $sorgu->execute();

        echo "<p>Mesajınız başarılı bir şekilde iletildi.Teşekkür ederiz...</p>";

    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $baglanti = null;
}

?>








<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>






    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.php">Ana sayfa</a> | <a href="makaleler.php">Makaleler</a>  | <a href="hesapla.php">Puan hesaplama</a>  | <a href="iletisim.php">İletişim</a></p>     
    </div>
  </div>
  
</body>

</html>
