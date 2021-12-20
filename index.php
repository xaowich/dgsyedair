


<?php
// UYE GIRISI YAPILMAMISSA GIRIS SAYFASINA YONLENDIR
include "baglanti.php";
if(!$_SESSION["login"]){
header("Location:giris.php");
}
?>  

<?php
include "vt.php";
?>




<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr">
<head>
    <meta charset="utf-8">
	<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  
  
  
  <style>
p {
  margin-top: 0px;
  color:black;
  font-size:55px;
  
  
}
</style>
  
  
 
  
  
  
  
  
  
 
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

	<title>Ana sayfa</title>
</head>

<body>




<div class="container mt-5" align="center">
    <div class="col">
        <?php
        if (file_exists("inc/ozellikler.php")){
            include "inc/ozellikler.php";
        }else{
            echo "Sistem dosyaları eksik.";
            exit();
        }
        ?>
    </div>
</div>	






  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">		
		 
         <img src="logo33.png"  alt="logo" align="left" width="320" height="160"/>
		 
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="index.php">Ana sayfa</a></li>
		  <li><a href="makaleler.php">Makaleler</a></li>
          <li><a href="hesapla.php">Puan hesaplama</a></li>
          <li><a href="iletisim.php">İletişim</a></li>
        </ul>
      </div>
    </div>
	

	
	

	
	


	
<br>
<br>
	
	
	




<h1 align="center">DGS'YE</h1>

<div class="container" align="center">
    <p id="timer">
        <span id="timer-gunler"></span>
        <span id="timer-saatler"></span>
        <span id="timer-dakikalar"></span>
        <span id="timer-saniyeler"></span>
    </p>
</div>
<script src="uygulama.js"></script>


<h1 align="center">KALDI</h1>	



<br>
<br>
<br>
<br>
<br>


<div class="container" align="center">
       <div class="resim-alan">
              <img src="makale1.png" style="width:500px;height:300px;" />
       </div>
</div>

<h1 color="red" align="center">DGS nedir?</h1><br>
<h3 align="center">DGS’nin açılımı dikey geçiş sınavıdır. Ölçme, Seçme ve Yerleştirme Merkezi Başkanlığı’nın meslek yüksekokulları ile açık öğretim ön lisans programları mezunlarının lisans öğrenimine geçişi için düzenlenir. 
Dikey geçiş sınavıyla ön lisans programlarından mezun olan kişilerin örgün öğretim lisans programlarına geçiş yapma olasılığı vardır. Dikey geçiş sınavı, ÖSYM tarafından her yıl Temmuz ya da Ağustos ayında yapılan bir sınav türüdür.
 DGS sınavının amacı, sözel ve sayısal içerikli akıl yürütme becerilerinin ölçülmesidir çünkü lisans öğretiminde başarının en önemli anahtarlı bu sayısal ve sözel becerilerdir.
 Dikey geçiş sınavı sadece 2 yıllık meslek yüksekokulu mezunları ve mezun olabilecek durumdaki adaylar içindir.
 Yükseköğretim programlarına dikey geçiş için başvuruda bulunacak adaylara meslek yüksekokulları ve açık öğretim ön lisans programlarından mezun olma koşulu aranmaktadır.</h3>

<br>
<br>






<div id="gif" align="center" width="200px" height="200px">
<img src="images/makale2.png" align="center" />
</div>

<br>
<br>

<h1 color="red" align="center">DGS'ye kimler girebilir?</h1><br>

<h3 align="center">DGS’ye kimler girebilir sorusunun yanıtı ile devam edelim.
 Yukarıda da tanımladığımız üzere herhangi bir üniversitenin ön lisans bölümünden mezun olmuş ya da olabilecek durumda olan öğrencilerin katılabildiği bir sınavdır.
 ÖSYM tarafından gerçekleştirilen çoktan seçmeli bir sınav türüdür. Yükseköğretim lisans programlarına dikey geçiş yapmak isteyenler bu sınava başvurabilir.
 Sınava ön lisans programlarından mezun olan adayların yanı sıra son sınıfta olup staj dışındaki mezuniyet şartlarını yerine getirmiş olan adaylar da başvuru yapabilir.
 DGS’ye yurt dışından da başvuru yapmak mümkündür. Birtakım nedenlerden dolayı başvuruların yapılacağı tarihlerde yurt dışında bulunmak durumunda olan ve başvuru merkezine gidemeyecek durumda olan adaylar için de başvuru imkânı vardır.</h3>

	
	
	
	
	
	
	
	
	
	
	
<br>
<br>

<div id="content_footer"></div>
    <div id="footer">
      <a href="index.php">Ana sayfa</a> | <a href="makaleler.php">Makaleler</a> | <a href="hesapla.php">Puan hesaplama</a> |  <a href="iletisim.php">İletişim</a>    
    </div>
  </div>

</body>

</html>
