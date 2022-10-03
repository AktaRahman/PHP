<?php
$A = "AKTAVAN KARUNIA RAHMAN";
$B = "Rumus Menghitung LUAS dan KELILING";
function persegi_panjang (){
    $panjang = 10;
    $lebar = 8;
    $luas = $panjang*$lebar;
    $keliling = (2 * $panjang) + (2 * $lebar);

    echo " <b>1. Rumus Menghitung luas dan keliling persegi</b><br>";
    echo " Rumus luas : Panjang x Lebar</sup><br>";
    echo " diketahui Panjang dan lebar adalah 10 dan 8<br><br>";
    echo " Panjang persegi : $panjang cm<br>";
    echo " lebar persegi : $lebar cm<br>";
    echo " luas = $panjang x $lebar  <br>";
    echo " Hasil luas nya adalah : $luas <br>";
    echo " Hasil kelilingnya nya adalah : $keliling ";
}
function lingkaran (){
    $jari = 12;
    $phie =22/7;
    $luas_lingkaran = $phie*($jari*$jari);

    echo " <b>2. Rumus Menghitung lingkaran</b><br>";          
    echo "Hasil hitung luas lingkaran adalah sebagai berikut:<br />";
    echo "Diketahui;<br />";
    echo "Jari-jari lingkaran = $jari<br />";
    echo "Phie = $phie<br />";
    echo "Maka luas lingkaran sama dengan [ $phie x $jari x $jari ] = $luas_lingkaran";
}
function segitiga (){
    $alas = 20;
    $tinggi =40;
    $a = 10;
    $b = 10;
    $c = 20;
    $keliling = $a + $b + $c;
    $luas_segitiga = 1/2 * $alas * $tinggi;

    echo " <b>2. Rumus Menghitung lingkaran</b><br>";  
    echo "Hasil hitung luas segitiga adalah sebagai berikut:<br />";
    echo "Diketahui;<br />";
    echo "Alas Segitiga = $alas<br />";
    echo "Tinggi Segitiga = $tinggi<br />";
    echo "Maka luas segitiga sama dengan 1/2 ($alas x $tinggi) = $luas_segitiga";
    echo " Hasil kelilingnya nya adalah : $keliling ";
}
persegi_panjang();
echo "<br><br><br>";
lingkaran();
echo "<br><br><br>";
segitiga();
echo "<br><br><br>";
echo " <i>$B</i> <br>";
echo " $A <br>";
?>