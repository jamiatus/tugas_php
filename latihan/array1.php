<?php

    // membuat array yang berisi nama
    $nama = array('Jamiatus', 'Sholihah', 'Fahmi', 'Anisa', 'Nasa');
    $umur = array (21, 20, 26, 21, 23);
    $kelas = array ('Laravel', 'Node JS', 'Digital Marketing', 'UI/UX Designer', 'Graphic Designer');
    
    // count() untuk menghitung isi array
    for ($x=0; $x<count($nama);$x++){
        echo "Nama : $nama[$x], Umur : $umur[$x], Kelas : $kelas[$x]<br/>";
    }
?>