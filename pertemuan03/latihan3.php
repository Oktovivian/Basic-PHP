<?php
// pengkondisian / percabangan
// if else
// if else if else
//  ternary
// switch

$x = 10;
if( $x < 20 ) {
    echo "benar";
}
// apakah 10 lebih kecil dari 20? jika benar maka akan muncul "benar"
// jika baris 10 sudah dijalankan, akan lanjut ke baris selanjutnya dan akan dikerjakan baik benar / salah

$x = 10;
if( $x < 20 ) {
    echo "benar";
} else {
    echo "salah";
}
// apakah kondisi berikut true? jika ya, jalankan baris 17, tapi selain daripada itu, jalankan garis 19

$x = 30;
if( $x < 20 ) {
    echo "benar";
} else if( $x == 20) {
    echo "bingo!";
} 
else {
    echo "salah";
}
// (jika $x = 30) dicek di baris ke 24, salah, dicek di baris 26, salah, akhirnya dijalankan di baris 30

?>
