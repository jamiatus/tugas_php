<?php
    
    // inisialisasi nilai setiap variabel
    $alas = 30;
    $tinggi = 20;
    $a = 25;
    $b = 41;
    $jari_jari = 21;
    $sisi = 12;
    $phi = 22/7;

    // rumus setiap variabel luas bangun datar
    $luas_jajargenjang = $alas * $tinggi;
    $luas_trapesium = 1/2 * ($a+$b) * $tinggi;
    $luas_segitiga = 1/2 * $alas * $tinggi;
    $luas_lingkaran = $phi * $jari_jari**2;
    $luas_persegi = $sisi * $sisi;

    echo "<h1><center>MENGHITUNG LUAS BANGUN DATAR</center></h1>";
    // output menghitung luas jajar genjang
    echo "<b>Menghitung Luas Jajar Genjang</b>";
    echo "<br>Rumus : L = alas x tinggi";
    echo "<br>Diketahui:";
    echo "<br>alas = $alas cm";
    echo "<br>tinggi = $tinggi cm";
    echo "<br>Maka luas jajar genjang adalah $alas x $tinggi = $luas_jajargenjang cm²<br>";
    // output menghitung luas trapesium
    echo "<br><b>Menghitung Luas Trapesium</b>";
    echo "<br>Rumus : L = 1/2 x (a+b) x tinggi";
    echo "<br>Diketahui:";
    echo "<br>a = $a cm";
    echo "<br>b = $b cm";
    echo "<br>tinggi = $tinggi cm";
    echo "<br>Maka luas trapesium adalah 1/2 x ($a+$b) x $tinggi = $luas_trapesium cm²<br>";
    // output menghitung luas segi tiga
    echo "<br><b>Menghitung Luas Segi Tiga</b>";
    echo "<br>Rumus : L = 1/2 x alas x tinggi";
    echo "<br>Diketahui:";
    echo "<br>alas = $alas cm";
    echo "<br>tinggi = $tinggi cm";
    echo "<br>Maka luas segi tiga adalah 1/2 x $alas x $tinggi = $luas_segitiga cm²<br>";
    // output menghitung luas lingkaran
    echo "<br><b>Menghitung Luas Lingkaran</b>";
    echo "<br>Rumus : L = π x r²";
    echo "<br>Diketahui:";
    echo "<br>jari-jari = $jari_jari cm";
    echo "<br>Maka luas lingkaran adalah ". round($phi, 2)." x ". $jari_jari**2 ." = $luas_lingkaran cm²<br>";
    // output menghitung persegi
    echo "<br><b>Menghitung Luas Persegi</b>";
    echo "<br>Rumus : L = sisi x sisi";
    echo "<br>Diketahui:";
    echo "<br>sisi = $sisi cm";
    echo "<br>Maka luas persegi adalah $sisi x $sisi = $luas_persegi cm²";

?>