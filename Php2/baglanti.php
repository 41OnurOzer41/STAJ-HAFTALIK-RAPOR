<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre=" ";
$vt_adi="b3_32098330_can";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());
}

?>