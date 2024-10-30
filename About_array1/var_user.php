<?php
// definisikan variables
$nama = 'Muhammad Fikrie El Muqoffa';
$umur = 20;
$berat = 47;


echo 'namaku adalah :'.@nama;
echo '<br>';
echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/>Hello $nama Apakabar";

echo '<hr>';

// variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
echo '<br>port' .$_SERVER["REMOTE_PORT"];

echo '<hr>';
// Definisikan variabel konstanta
// Define : untuk memanggil variabel konstanta = define('nama yang mau ditulis', 'nama yang mau dipanggil')
define('PELAJARAN', 'pemweb');

echo PELAJARAN;
?>