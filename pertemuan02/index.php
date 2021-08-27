<?php
// Pertemuan 2 - PHP dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r (untuk mencetak isi array)
// var_dump (melihat isi variable)

// ini adalah komentar
// ini juga komentar
/*
ini komentar
ini juga komentar
*/

echo "Oktovivian";
// bisa pakai kutip dua atau kutip satu
// kalau pakai kutip dua karena ada kutip satu di dalam kaliamt dalam string 
// jika angka dan boolean tidak pakai ("")
print_r("Oktovivian");

// jika pakai var_dump maka akan diberitau tentang ukuran font, tapi user tidak membutuhkan ini

// penulisan syntax php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

?>

<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF=8"
    <title>Belajar PHP</title>
</head>
<body>
    <h1> Halo, Selamat Datang  <?php echo "Oktovivian"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
</body>


<?php
// Variabel dan Tipe Data
// Variabel (menampung sebuah nilai)
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Oktovivian Muhammad";

echo "halo, nama saya $nama";
?>

<?php
// Operator
// aritmatika
// + - 8 / %

$x = 10;
$y = 20;

echo $x * $y;

// penggabung string/ concatenation / concat
// .
$nama_depan = "Oktovivian";
$nama_belakang = "Muhammad";

echo $nama_depan . " " . $nama_belakang;

// Operator assignment
// =, +=, -+, *=, %=. .=
$x = 1;
$x += 5;
$x -= 1;
echo $x;

$nama = "Oktovivian";
$nama .= " ";
$nama .= "Muhammad";
echo $nama;


// Operator Perbandingan
// <, >, <=, >=, ==, !=
// tidak mengecek tipe data, hanya mengecek angka
var_dump(1 < 5);
var_dump(1 == "1");


//  Operator Identitas
// ===, !==
var_dump(1 === "1");
// akan false karena meskipun nilainya sama tapi tipe datanya beda


// Operator Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
// harusnya true

$x = 30;
var_dump($x < 20 && $x % 2 == 0);
// apakah 30 lebih kecil dari 20 ga? salah
// apakah 30 bilangan genap? benar
// harus benar dua2nya

$x = 30;
var_dump($x < 20 || $x % 2 == 0);
// jika pakai || maka akan dideteksi satu2



?>

