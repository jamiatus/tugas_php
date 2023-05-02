<?php

    // variabel nama tipe data string sehingga nilai terdapat di dalam tanda kutip
    $nama = "Jamiatus Sholihah";
    // variabel tinggi_badan tipe data integer dalam satuan cm
    $tinggi_badan = 154;
    // variabel berat_badan tipe data integer dalam satuan kg
    $berat_badan = 41;

    //variabel bmi didapat dari hasil nilai berat badan (kg) dibagi tinggi badan (m) yang dikuadratkan karena nilai variabel tinggi_badan dalam bentuk cm maka harus diubah ke satuan m sehingga tinggi_badan dibagi 100 terlebih dahulu sebelum dipangkatkan
    $bmi = $berat_badan / ($tinggi_badan/100)**2;

    /* untuk penentuan kategori kurus, sedang dan gemuk di sini menggunakan percabangan if-else
    pertama sistem akan mengecek jika nilai variabel bmi kurang dari 18.50 maka nilai kategorinya kurus, 
    jika salah maka akan melakukan pengecekan ke elseif*/
    if ($bmi < 18.50) {
        $kategori = "kurus";
    // jika nilai variabel bmi antara 18.50 - 24.90 maka nilai kategorinya sedang
    }elseif ($bmi >= 18.50 && $bmi < 25){
        $kategori = "sedang";
    // jika pengecekan sebelumnya bernilai salah, maka akan mencetak statement else
    }else{
        $kategori = "gemuk";
    }

    // output yang akan ditampilkan dengan menggunakan perintah echo, output memanggil 3 variabel di atas yaitu nama, bmi dan kategori
    echo "Halo, $nama. Nilai BMI anda adalah ". round($bmi, 2). ", anda termasuk $kategori";

?>