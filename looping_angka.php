<?php

    // looping untuk membuat baris baru pada perulangan, dimulai dari 0 dan akan berhenti di 8 sehingga total barisnya 9 dan setiap perulangan bertambah 1 (increment)
    for($a = 0; $a <= 8; $a++){
        // looping untuk nilai setiap baris pada proses perulangan dimulai dari angka 0, akan berhenti jika nilai $b kurang dari sama dengan nilai $a dan setiap perulangan akan bertambah 1 (increment) ke samping.
        for($b = 0; $b <= $a; $b++){
            // nilai yang akan dicetak pada perulangan ini
            echo $b;
        }
        // sistem akan mencetak break line atau baris baru jika looping di dalam looping bernilai false dan akan mengulangi pengecekan pada looping for utama 
        echo "<br>";
    }

?>