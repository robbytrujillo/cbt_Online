<?php
include("koneksi.php"); // Koneksi Database dengan memanggil file config
//Langkah 1: Tentukan batas, cek halaman & posisi data
$batas = 1;
$halaman = $_GET['halaman'];
if (empty($halaman)) {
    $posisi = 0;
    $halaman = 1;
} else {
    $posisi = ($halaman - 1) * $batas;
}
echo "<p>&nbsp;</p>";

//Membatasi data dari SQL
$aksi = "simpan.php";
$query = "SELECT * FROM tabel_soal ORDER BY id_soal ASC LIMIT $posisi, $batas";
$data = mysqli_query($konek, $query);
$no = $posisi + 1; //Agar angka (penomoran) mengikuti paging 
while ($r = mysqli_fetch_array($data)) {
    $cek = mysqli_query($konek, "SELECT * FROM jawaban WHERE id_soal = $r[id_soal]");

    $no = $posisi + 1; //Agar angka (penomoran) mengikuti paging 
    while ($r = mysqli_fetch_array($data)) {
        $cek = mysqli_query($konek, "SELECT * FROM jawaban WHERE id_soal = $r[id_soal]");

        $ketemu = mysqli_num_rows($cek);
        //Tampilkan soal saat sudah di isi untuk memperbaiki jawaban
        if ($ketemu > 0) {

            include("modul/soal_kosong");
        } else { //Tampilkan soal ketika belum diisi
            include("modul/soal_isi_php");
        }

        //Hitung total data dan halaman serta link 1,2,3 ...
        $hal = mysqli_query($konek, "SELECT * FROM tabel_soal");

        $jmldata = mysqli_num_rows($hal);
        $jmlhalaman = ceil($jmldata / $batas);
    }

}


?>