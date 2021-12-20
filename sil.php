<?php

if ($_GET) {

    include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

    $sorgu = $baglanti->prepare("SELECT * FROM makale Where id=:id");
    $sorgu->execute(['id' => (int)$_GET["id"]]);
    $sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor
    unlink('images/' . $sonuc["foto"]); //eski dosya siliniyor.

    // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
    $where = ['id' => (int)$_GET['id']];
    $durum = $baglanti->prepare("DELETE FROM makale WHERE id=:id")->execute($where);

    if ($durum) {
        header("location:index.php"); // Eğer sorgu çalışırsa index.php sayfasına gönderiyoruz.
    }
}

?>