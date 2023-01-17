<?php
include("koneksi.php"); // Koneksi Database dengan memanggil file config
//Langkah 1: Tentukan batas, cek halaman & posisi data
$batas = 1;
$halaman = $_GET['halaman'];
if(empty($halaman)) {
    $posisi = 0;
    $halaman = 1;
} else {
    $posisi = ($halaman - 1) * $batas;
}
echo "<p>$nbsp;</p>";

//Membatasi data dari SQL
$aksi = "simpan.php";
$query = "SELECT * FROM tabel_soal ORDER BY id_soal ASC LIMIT $posisi, $batas";
$data = mysqli_query($konek, $query);
$no = $posisi + 1; //Agar angka (penomoran) mengikuti paging 
 


?>