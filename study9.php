<?php

function uanglembaran($uang) {
  $pecahan = [100000, 75000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
  $hasil = [];

  foreach ($pecahan as $lembaran) {
    $jumlah = intval($uang / $lembaran);
    $uang -= $jumlah * $lembaran;
    if ($jumlah > 0) {
      $hasil[] = "$jumlah lembar Rp. $lembaran <br>";
    }
  }

  
  return implode($hasil);

}

$uang = 178500;
echo uanglembaran($uang);

?>