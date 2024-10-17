<?php
function cekAngka($teks) {
    preg_match_all('/\d/', $teks, $matches);
    $angka = array_unique($matches[0]);

    if (!empty($angka)) {
        echo "teks mengandung angka : " . implode(", ", $angka);
    } else {
        echo "teks tidak mengandung angka.";
    }
}

$teks_input = "Saya memiliki 2 apel dan 4 jeruk.";
cekAngka($teks_input);
?>