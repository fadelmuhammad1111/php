<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 98];

$sama = array_intersect($bil1, $bil2);

$tidakSama = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

echo "Kelompok Bilangan yang Sama: ";
echo implode(", ", $sama);
echo "<br>";

echo "Kelompok Bilangan yang Tidak Sama: ";
echo implode(", ", $tidakSama);
?>