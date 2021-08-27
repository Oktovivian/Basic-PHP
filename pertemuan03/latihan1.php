<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World! <br>";
}
// <br> untuk membuat baris baru

$i = 0;
while( $i < 5 ) {
    echo "Hello World! <br>";
$i++;
}
// cara kerjanya : cek kondisi truenya, baru jalankan bloknya


$i = 0;
do {
    echo "Hello World <br>";
$i++;
} while( $i < 5 );
// cara kerjanya : jalankan dulu, baru cek kondisi truenya
// ketika kondisinya false : akan dijalankan dulu sekali 'hello world'nya sekali
?>
