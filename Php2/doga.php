<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

    <title>Rota Gebze</title>
</head>
<body>
    <section id="menu">
        <div id="logo">ROTA GEBZE</div>
        <nav>
            <a href="index.php"><i class="fas fa-home ikon"></i>Anasayfa</a>
            <a href="kurumsal.php">Tarihi Camiiler</a>
            <a href="gebze.php">Çeşmeler</a>
            <a href="haberler.php">Kaleler Ve Kuleler</a>
            <a href="hamam.php">Han Ve Hamamlar</a>
            <a href="doga.php">Doğa Turizmi</a>
            <a href="yemekler.php">Yöresel Yemekler</a>
            <a href="sehitlik.php">Gebze Şehitliği</a>
            <a href="iletisim.php">İletişim</a>
            <a href="panelgiris.php">Yönetici Girişi</a>
    </section>

    <section id="tyerler">
        <div id="container">
            <h3>DOĞA TURİZMİ</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge="1.5">
                    <img src="img/anibal.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Anibalın Mezarı</h5>
                    <p class="cardp">Kartacalı ünlü komutan Anibalın Anıt Mezarı, Gebzenin güneydoğusunda, çevresi daire şeklinde selvilerle çevrili sahanın ortasında yer alan 24 ton ağır</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/ballıkayalar.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Ballıkayalar</h5>
                    <p class="cardp">Gebze - İzmit yolu üzerindeki Tavşanlı Köyü sınırlarında bulunan kampçılık ve trekking gibi doğa sporları için oldukça elverişli arazi yapısına sahip</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/hünkar.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Hünkar Çayırı</h5>
                    <p class="cardp">Fatih Sultan Mehmet'in 27 Nisan 1481 Cuma günü İtalya üzerine yapılacak sefer için üç yüz bin kişilik ordusuyla Üsküdar'dan İzmit'e doğru yola çıktığında, ordusuna mola verdiği veya otağını kurdurduğu çayırlık alana Hünkar Çayırı denilmektedir.</p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="img/ohb.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Osman Hamdi Bey Yalısı</h5>
                    <p class="cardp">Türk Müzeciliğinin kurucusu sayılan Ünlü Ressam Osman Hamdi Bey tarafından Gebze, Eskihisarda 1884 yılında yaptırılmıştır.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>

    </body>
</html>

<?php
include("baglanti.php");
?>