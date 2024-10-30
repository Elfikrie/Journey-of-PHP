<?php 

//Array disebut juga sekumpulan data
// Array 2 yaitu array numerik dan array asosiatif
// Untuk memanggil array kita butuh fungsi perulangan foreach


// 1. Array Numeric
$ar_buah = array ('Pepaya', 'Mangga', 'Durian', 'Rambutan');
// Menhapus index yang paling belakang
array_pop($ar_buah);
// Menambahkan data dari belakang
array_push($ar_buah,"Apel");
// Menghapus data dari paling depan
array_shift($ar_buah);

// Cetak indexke brapa
echo $ar_buah[1];
echo '<br>';
// Jumlah total buah
$jumlah = count($ar_buah);

echo $jumlah;
echo '<hr>';

// Lihat hasil sekumpulan data buah menggunakan foreeach
foreach ($ar_buah as $value) { // as "memberikan nama variabel baru sebagai inisial"
    echo $value. '<br>';
    // Sort berguna untuk mengurutkan data sesuai abjad atau angka
    sort($ar_buah); 
    // Arsort mengurutkan data sesuai abja/angka dari yang paling belakang
    arsort($ar_buah);
}
echo '<hr>';
// Array asosiatif (untuk menampilkan nomor index dan valuenya)
foreach($ar_buah as $index => $value){
    echo "$index $value <br>";
}
echo '<hr>';

// 2. Array Asosiatif
// 10=> mengcustom index ke berapa
$ar_sisga = array (10=>'luluk' , 20=>'angga',30=>'adi', 'afif' );
foreach ($ar_sisga as $index => $value) {
    echo "$index $value <br>";
}




?>