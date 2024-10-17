<?php
function hitungKompensasi($jam_mulai, $jam_pulang) {
    $jam_kerja = $jam_pulang - $jam_mulai;
    $jam_normal = 8;
    $jam_lembur = $jam_kerja - $jam_normal;

    if ($jam_lembur <= 0) {
        return 0;
    }
    $kompensasi = 0;

    if ($jam_lembur > 0) {
        $kompensasi += 50000;
        $jam_lembur--;
    }

    if ($jam_lembur > 0) {
        $kompensasi += $jam_lembur * 25000;
    }

    return $kompensasi;
}

$jam_mulai = 8;
$jam_pulang = 16;

$kompensasi = hitungKompensasi($jam_mulai, $jam_pulang);
echo "Jam Mulai : " . $jam_mulai . ".00" .  "<br>";
echo "Jam Pulang : " . $jam_pulang . ".00" . "<br>";
echo "Jumlah kompensasi yang diterima pegawai: Rp " . number_format($kompensasi, 2, ',', '.');
?>