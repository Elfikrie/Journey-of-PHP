<table border="1">
    <tr>
<?php

$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$nilaiUts = $_GET['nilaiUts'];
$nilaiUas = $_GET['nilaiUas'];
$praktikum = $_GET['praktikum'];

// Buat Total Nilai
// dar = nilaiUts + nilaiUas + praktikum/3
$total_nilai = ($nilaiUts + $nilaiUas + $praktikum) / 3;

// Buat perhitungan IF untuk mencari Grade
if ($total_nilai >= 85){
    $grade = "A";
}
elseif($total_nilai >=70){
    $grade = "B";
}
elseif($total_nilai >=56){
    $grade = "C";
}
elseif($total_nilai >=30){
    $grade = "D";
}
else {
    $grade = "E";
}

// Buat perhitungan SWICTCASE untuk mencari Predikat
switch ($grade){
    case "A":
        $Predikat = "Sangat Memuaskan";
        break;
    case "B":
        $Predikat = "Memuaskan";
        break;
    case "C":
        $Predikat = "Cukup";
        break;

    case "D":
        $Predikat = "Kurang";
        break;
    case "E":
        $Predikat = "Sangat kurang";
        break;
    default:
        $Predikat = "Tidak tersedia";
        break;
}


// Buat perhitungan IF untuk mencari  status Lulus/gagal
if($total_nilai >= 70){
    $status ="LULUS";
}else{
    $status = "Tidak lulus";
}


// Cetak hasil
echo "Nama Lengkap : $nama<br>";
echo "Mata Kuliah : $matkul<br>";
echo "Nilai Uts : $nilaiUts <br>";
echo "Nilai Uas : $nilaiUas <br>";
echo "Praktikum : $praktikum <br>";
echo "Rata-rata nilai : $total_nilai % <br>";
echo "Grade Nilai : $grade <br>";
echo "Predikat Nilai : $Predikat<br>";
echo "Status Kelulusan : $status";


?></tr></table>