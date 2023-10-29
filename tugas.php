<?php
    // Pemasukan
    $pemasukan = 50000000;

    // Hutang a
    $hutang_A = 16500000;
    $bunga_A = 0.05; // 5%

    // Hutang b
    $hutang_B = 9500000;
    $bunga_B = 0.045; // 4.5%

    // Perhitungan
    $sisaUang = $pemasukan - ($hutang_A * (1 + $bunga_A)) - ($hutang_B * (1 + $bunga_B));
    $totalBunga = ($hutang_A * $bunga_A) + ($hutang_B * $bunga_B);
    $totalHutang = $hutang_A + $hutang_B;

    // Menampilkan hasil
    echo "Berapa sisa uang: " . number_format($sisaUang) . " IDR<br>";
    echo "Berapa jumlah total bunga hutang: " . number_format($totalBunga) . " IDR<br>";
    echo "Berapa jumlah total hutang: " . number_format($totalHutang) . " IDR";
    //editor baguuuuuuuuuss
?>