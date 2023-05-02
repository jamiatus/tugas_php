<?php
    
    // inisialisasi nilai setiap variabel
    $sisi = 12;
    $tinggi = 20;
    $jari_jari = 8;
    $phi = 22/7;

    // rumus setiap variabel luas dan volume
    $luas_alas = $sisi*$sisi;
    $vol_limas = 1/3 * $luas_alas * $tinggi;
    $vol_tabung = 22/7 * $jari_jari**2 * $tinggi;
    $vol_bola = 4/3 * 22/7 * $jari_jari**3;

    echo "<h1><center>MENGHITUNG VOLUME BANGUN RUANG</center></h1>";
    // output menghitung volume limas
    echo "<b>Menghitung Volume Limas Segi Empat</b>";
    echo "<br>Rumus : V = 1/3 x luas alas x tinggi";
    echo "<br>Diketahui:";
    echo "<br> sisi = $sisi cm";
    echo "<br> tinggi = $tinggi cm";
    echo "<br> luas alas = $sisi x $sisi = $luas_alas cm²";
    echo "<br>Maka volume limas adalah 1/3 x $luas_alas x $tinggi = $vol_limas cm³<br>";
    // output menghitung volume tabung
    echo "<br><b>Menghitung Volume Tabung</b>";
    echo "<br>Rumus : V = π x r² x t";
    echo "<br>Diketahui:";
    echo "<br> jari-jari = $jari_jari cm";
    echo "<br> tinggi = $tinggi cm";
    echo "<br>Maka volume tabung adalah " . round($phi, 2) . " x " . $jari_jari**2 . " x $tinggi = " . round($vol_tabung,2) . " cm³<br>";
    // output menghitung volume bole
    echo "<br><b>Menghitung Volume Bola</b>";
    echo "<br>Rumus : V = 4/3 x π x r³";
    echo "<br>Diketahui:";
    echo "<br> jari-jari = $jari_jari cm";
    echo "<br>Maka volume bola adalah 4/3 x " . round($phi, 2) . " x " . $jari_jari**3 . " = " . round($vol_bola,2) ." cm³<br>";
    
?>