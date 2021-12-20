

<h1>GELEN MESAJLAR</h1>

<?php
try {
  $dsn = "mysql:host=localhost;dbname=kisi;charset=utf8mb4";
  $user = "root";
  $passwd = "usbw";

  $db = new PDO($dsn, $user, $passwd);
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);
  $db = $db->query("SELECT * FROM kisiler");

  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi

  foreach ($oku as $row) {
  extract($row);
  echo "İSİM=$kisi_isim    E-POSTA ADRESİ=$kisi_eposta   MESAJ=$kisi_mesaj<br/>";
  }
          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }
?>

