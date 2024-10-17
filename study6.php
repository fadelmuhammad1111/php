<?php

    $student = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88],
        ],
        [
            'nama' => 'Beni',
            'nilai' => [86, 70, 80, 85, 81],
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81],
        ],
        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88],
        ],
        
    ];

    foreach ($student as $siswa) {
        $total_nilai = array_sum($siswa['nilai']);
        $jumlah_nilai = count($siswa['nilai']);
        $rata_rata = $total_nilai / $jumlah_nilai;

        
    
        echo "Rata-rata nilai " . $siswa['nama'] . " adalah: " . number_format($rata_rata,1) . "<br>";
    }

?>