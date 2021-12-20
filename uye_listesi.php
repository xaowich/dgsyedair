<?php
/*
www.celalyurtcu.com
*/
?>

<?php
// UYE GIRISI YAPILMAMISSA GIRIS SAYFASINA YONLENDIR
include "baglanti.php";
if(!$_SESSION["login"]){
header("Location:giris.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Üye Listesi</title>
    <!-- BOOTSTRAP 4.3.1 FRAMEWORK PROJEMİZE DAHİL EDİYORUZ -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- BOOTSTRAP 4.3.1 FRAMEWORK PROJEMİZE DAHİL EDİYORUZ -->
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="mt-5">Üye Listesi - <a href="index.php?sayfa=cikis-yap"><b>ÇIKIŞ YAP</b></a></h4>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col"> Kullanıcı Adı</th>
                    <th scope="col">Şifre</th>
                    <th scope="col">E-posta</th>
                    <th scope="col">Üye Yönetimi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "baglanti.php";

                $uyeler = $db -> query("SELECT * FROM uyeler ORDER BY uye_id ASC", PDO::FETCH_OBJ);
                foreach ($uyeler as $uye) { ?>
                    <tr>
                        <th scope="row"><?php echo $uye->uye_id;?></th>
                        <td><?php echo $uye->uye_kadi;?></td>
                        <td><?php echo $uye->uye_sifre;?></td>
                        <td><?php echo $uye->uye_eposta;?></td>
                        <td>
                            <a href="uye_duzenle.php?id=<?php echo $uye->uye_id;?>">[ Düzenle ]</a>
                            <a href="uye_sil.php?id=<?php echo $uye->uye_id;?>">[ Sil ]</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <a href="uye_ekle.php" class="btn btn-primary">Yeni Üye Ekle</a>
        </div>
    </div>
</div>
</body>
</html>