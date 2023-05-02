<?php

    echo "<h1><center>MENGHITUNG KATEGORI NILAI</center></h1>";
    // variabel nilai tipe data integer
    $nilai = 75;
    // percabangan switch, pengecekan akan dilakukan dari case yang pertama
    switch (true) {
        // jika variabel nilai bernilai lebih besar dari 90 dan kurang dari sama dengan 100
        case ($nilai > 90 && $nilai <=100):
            // maka akan mencetak kalimat berikut ini, jika salah maka akan melanjutkan pengecekan pada case kedua
            echo "Nilai yang Anda peroleh adalah $nilai dengan predikat A";
            // untuk mengakhiri statement
            break;
        // jika variabel nilai bernilai lebih besar dari 80 dan kurang dari sama dengan 90
        case ($nilai > 80 && $nilai <=90):
            // maka akan mencetak kalimat berikut ini, jika salah maka akan melanjutkan pengecekan pada case ketiga
            echo "Nilai yang Anda peroleh adalah $nilai dengan predikat B";
            break;
        // jika variabel nilai bernilai lebih besar dari 70 dan kurang dari sama dengan 80
        case ($nilai > 70 && $nilai <=80):
            // maka akan mencetak kalimat berikut ini, jika salah maka akan melanjutkan pengecekan pada case keempat
            echo "Nilai yang Anda peroleh adalah $nilai dengan predikat C";
            break;
        // jika variabel nilai sama dengan 0 dan kurang dari sama dengan 70
        case ($nilai = 0 && $nilai <=70):
            // maka akan mencetak kalimat berikut ini, jika salah maka akan melanjutkan pengecekan pada default
            echo "Nilai yang Anda peroleh adalah $nilai dengan predikat D";
            break;  
        // jika nilai variabel tidak memenuhi setiap case nilai maka akan mencetak statement default 
        default:
            echo "<b>Sistem Eror!!!</b>";
    }

?>