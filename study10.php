<?php

function hitungUsia($list) {
    $anakAnak = 0;
    $dewasa = 0;
    
    foreach ($list as $usia) {
      if ($usia < 17) {
        $anakAnak++;
      } else {
        $dewasa++;
      }
    }
    
    return array('anak_anak' => $anakAnak, 'dewasa' => $dewasa);
  }

$usia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
$hasil = hitungUsia($usia);

echo "Usia : " . implode(', ', $usia) . "<br>";
echo "Jumlah anak-anak: " . $hasil['anak_anak'] . "<br>";
echo "Jumlah dewasa: " . $hasil['dewasa'] . "<br>";

?>