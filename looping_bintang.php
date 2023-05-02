<?php

    // looping untuk membuat baris baru pada perulangan, dimulai dari 9 dan akan berhenti di 1 sehingga total barisnya 9 dan setiap perulangan berkurang 1 (decrement)
    for($a = 9; $a > 0; $a--){
        // looping untuk nilai setiap baris pada proses perulangan dimulai dari angka 0, akan berhenti jika nilai $b kurang dari sama dengan nilai $a dan setiap perulangan akan bertambah 1 (increment) ke samping.
        for($b = 1; $b <= $a; $b++){
            // nilai yang akan dicetak pada perulangan ini
            echo "*";
        }
        // sistem akan mencetak break line atau baris baru jika looping di dalam looping bernilai false dan akan mengulangi pengecekan pada looping for utama 
        echo "<br>";
    }

?>