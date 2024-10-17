<?php
for ($i = 1; $i <= 10; $i++) {
    $hasil = 5 * $i;

    if (strpos((string)$hasil, '0') === false) {
        echo $hasil . "<br>";
    }
}
?>