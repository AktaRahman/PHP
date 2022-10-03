<?php
$A = "Masbilly.com";
$B = "Rumus Menghitung Bangun Ruang";
function persegi_panjang (){
 $panjang = 10;
 $lebar = 8;
 $luas = $panjang*$lebar;
 echo " <b>1. Rumus Menghitung luas persegi</b><br>";
 echo " Rumus luas : Panjang x Lebar</sup><br>";
 echo " diketahui Panjang dan lebar adalah 10 dan 8<br><br>";
 echo " Panjang persegi (s) : $panjang cm<br>";
 echo " lebar persegi (s) : $lebar cm<br>";
 echo " luas = $panjang x $lebar  <br>";
 echo " Hasil luas nya adalah : $luas ";
}
function limas (){
 $p = 1/3;
 $la = 48;
 $t = 16;
 $volume = $p*$la*$t;
 echo " <b>2. Rumus Menghitung Volume Limas</b><br>";
 echo " Rumus Volume : V = 1/3 x Luas Alas x Tinggi<br><br>";
 echo " Luas Alas : $la cm<br>";
 echo " Tinggi : $t cm<br>"; 
 echo " V = 1/3 x $la x $t  <br>";
 echo " Hasil Volume nya adalah : $volume ";
}
function prisma (){
 $la = 50;
 $t = 3;
 $volume = $la*$t;
 echo " <b>3. Rumus Menghitung Volume Prisma</b><br>";
 echo " Rumus Volume : V = Luas Alas x Tinggi<br><br>";
 echo " Luas Alas : $la cm<br>";
 echo " Tinggi : $t cm<br>"; 
 echo " V = $la x $t  <br>";
 echo " Hasil Volume nya adalah : $volume ";
}
persegi_panjang();
echo "<br><br><br>";
limas();
echo "<br><br><br>";
prisma();
echo "<br><br><br>";
echo " <i>$B</i> <br>";
echo " $A <br>";
?>