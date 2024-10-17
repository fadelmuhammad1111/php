<?php

function Nama($pertama, $kedua) {
  $nama1 = strlen($pertama);
  $nama2 = strlen($kedua);

  if ($nama1 > $nama2) {
    $selisih = $nama1 - $nama2;
    $hasil = "$pertama memiliki jumlah karakter lebih banyak dari $kedua : selisih $selisih";
  } elseif ($nama2 > $nama1) {
    $selisih = $nama2 - $nama1;
    $hasil = "$kedua memiliki jumlah karakter lebih banyak dari $pertama : selisih $selisih karakter";
  } else {
    $hasil = "Kedua nama memiliki jumlah karakter yang sama";
  }

  echo "Nama pertama: $pertama ($nama1) <br>";
  echo "Nama kedua: $kedua ($nama2) <br>";
  echo $hasil;
}


Nama("Fema Putri", "Artasya");

?>