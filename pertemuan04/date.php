<?php
// FUNCTION
// function adalah potongan program / baris code yg dibuat untuk mempermudah kita saat mrogram dan bisa kita kasih nama serta bisa dipakai berulang2
?>

<?php
// DATE

   echo date("l,d-M-Y");
    // menggunakan 'l' akan menampilkan hari
    // menggunakan 'd' akan menampilkan tanggal
    // menggunakan 'M' akan menampilkan bulan (huruf)
    // menggunakan 'm' akan menampilkan bulan (angka)
    // menggunakan 'Y' akan menampilkan tahun


    // Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
    // Mountain Standard Time (MST) Time Zone


        //https://www.php.net/manual/en/function.date
        //$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
        //$today = date("m.d.y");                         // 03.10.01
        //$today = date("j, n, Y");                       // 10, 3, 2001
        //$today = date("Ymd");                           // 20010310
        //$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
        //$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
        //$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
        //$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
        //$today = date("H:i:s");                         // 17:16:18
        //$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

// TIME
   // echo time();
        // UNIX Tmestamp / EPOCH time
        // detik yang sudah berlalu sejak 1 Januari 1970

   echo date("l", time()+172800);
        // tampilkan hari ini, ditambah 2 hari

   echo date("l", time()+60*60*24*100);
        // tampilkan hari ini, ditambah 100 hari

   echo date ("d-M-Y", time()+60*60*24*100);

    // mktime()
        // membuat detik sendiri
        // mktime(0,0,0,0,0,0)
        // jam, menit, detik, bulan, tanggal, tahun

    echo date("l", mktime(0,0,0,10,30,2003));

    // strtotime()
    echo date("l", strtotime("30 oct 2003"));

// FUNCTION YANG AKAN BANYAK DIPAKAI DI SERI PEMBELAJARN PHP
// STRING
    // 1. strlen() (menghitung panjang dari sebuah line)
    // 2. strcmp() (untuk membandingkan dua buah string)
    // 3. explode() (memecah string menjadi array, untuk mengambil nama sebuah file)
    // 4. htmlspecialchrs() (menjaga kita dari orang yang iseng masuk ke website kita)

// UTILITY
    // 1. var_dump() (untuk mencetak isi dari sebuah variable, array, object)
    // 2. isset() (untuk mengecek apakah sebuah variable sudah pernah dibikin / belum, isinya boolean (false/true))
    // 3. empty() (untuk mengecek apakah variable yg kita tulis itu kosong atau tidak)
    // 4. die() (untuk memberhentikan program kita saat bertemu 'die')
    // 5. sleep() (untuk memberhentikan sementara ex : sleep untuk 2 detik)


?> 
