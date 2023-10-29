<?php //Aturan Dasar Penulisan Kode PHP
    echo "Hello Word";
    ECHO "Hello Word";
    EcHo "Hello Word";
?>
<?php
    $andi = "Den Bagus";
    echo "Den Bagus"; // Notice: Undefined variable: Den BAgus
?>

<?php //Pengertian Variabel dan Cara Penulisan Variabel PHP

    $i; //variabel tdk boleh diawali dgn angka
    $nama; 
    $Umur;
    $_lokasi_memori; //variable tidak boleh mengandung spasi
    $ANGKA_MAKSIMUM; //variabel tdk boleh mengandung karakter khusus
?>

<?php // Cara Menampilkan Nilai Variabel
    $a='Saya Sedang Belajar Php';
    $b=5;

    print $a;
    echo $b;
?>
<?php
    $a=5;
    $b="Sedang Blejar PHP $a";

    echo $b;
    //hasil: saya sedang belajar PHP 5
?>

<?php //Pengertian Tipe Data PHP "Interger"
    $umur=21;
    $harga=15000;
    $rugi=-500000;

    echo $umur; //21
    echo "<br />";
    echo $harga; //15000
    echo "<br />";
    echo $rugi; // -500000
?>
<?php
    $a=14;
    $b=16;
    $c= $a + $b;
    echo $c; // 30

    $d=$a * $b;
    echo $d; // 224
?>

<?php //Pengertian Tipe Data PHP "Float"
    $angka_float1=0.78;
    $angka_float2=14.99;
    $angka_scientific1=0.314E1;
    $angka_scientific2=0.3365E-3;

    echo $angka_float1; //0.78
    echo "<br />";
    echo $angka_float2; //14.99
    echo "<br />";
    echo $angka_scientific1; //3.14
    echo "<br />";
    echo $angka_scientific2; //0.0003365
?>
<?php
    $a=10.66;
    $b=12.4;
    $c= $a + $b;
    echo $c; // 23.06

    $d=$a / $b;
    echo $d; // 0.85967741935484
?>

<?php // Pengertian Tipe Data PHP "String"
$string1='Ini adalah string sederhana';

$string2="Ini adalah string 
yang bisa memiliki beberapa 
baris";

$string3= 'Dia berkata:"I\'ll be back"';

echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
?>

<?php // Pengertian Tipe Data PHP "Boolean"
$benar=true;
$salah=false;

echo "benar = $benar, salah = $salah;
// hasil output: benar = 1, salah = 2"
?>

<?php //Operator Aritmatika
$hasil1= -3;
$hasil2=3+5;
$hasil3=8-4.5;
$hasil4= 2*5;
$hasil5= 3+8/5-3;
$hasil6= 10 % 4;

echo $hasil1; var_dump($hasil1);
echo "<br />";
echo $hasil2; var_dump($hasil2);
echo "<br />";
echo $hasil3; var_dump($hasil3);
echo "<br />";
echo $hasil4; var_dump($hasil4);
echo "<br />";
echo $hasil5; var_dump($hasil5);
echo "<br />";
echo $hasil6; var_dump($hasil6);
?>