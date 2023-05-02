<?php

    // looping untuk membuat baris baru pada perulangan, dimulai dari 1 dan akan berhenti di 10 sehingga total barisnya 10 dan setiap perulangan bertambah 1 (increment)
    for($a = 1; $a <= 10; $a++){
        // looping untuk nilai setiap baris pada proses perulangan dimulai dari angka 1, akan berhenti jika nilai $b kurang dari sama dengan 1 dan setiap perulangan akan bertambah 1 (increment)
        for($b = 1; $b<=1; $b++){
            /* nilai yang akan dicetak pada perulangan ini yaitu variabel b dikali variabel a
            nilai $b dari baris 1 sampai baris 10 akan tetap 1 karena $b dimulai dari 1 dan akan berhenti jika $b <= 1
            nilai $a dari baris 1 akan bertambah satu disetiap barisnya sampai $a bernilai kurang dari sama dengan 10*/
            echo "$b x $a = " . $b*$a;
        }
        // sistem akan mencetak break line atau baris baru jika looping di dalam looping bernilai false dan akan mengulangi pengecekan pada looping for utama
        echo "<br>";
    }

?>