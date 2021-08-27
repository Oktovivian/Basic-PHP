<?php
// user define function = fungsi kita sendiri
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
// "Datang" dan "Admin" adalah parameter default, saat tidak ada data yg masuk maka parameter default yg dijalankan
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Function</title>
    </head>
</html>
<body>
    <h1><?php echo salam("Pagi", "Oktovivian"); ?></h1>
</body>
</html>