<?php
if ($halaman > $jmldata) { //Jika test sudah selesai dikerjakan
    echo "<p>Dari Total Jumlah <b>$jmldata</b> Soal,";


//Hitung Pertanyaan yang mempunyai jawaban benar
$jawab = mysqli_query($konek, "SELECT count(jawaban.jawaban) as jml FROM tabel_soal, jawaban WHERE jawaban.id_soal = tabel_soal.id_soal AND jawaban.jawaban = tabel_soal.jawaban_benar");
while ($b = mysqli_fetch_array($jawab)) {
    //Hitung Pertanyaan Yang Di Jawab
    $terjawab = mysqli_query($konek, "SELECT * FROM jawaban");
    $t = mysqli_num_rows($terjawab);

    //Hitung Jumlah Jawaban Yang Salah
    $salah = $t - $b['jml'];

    //Hitung pertanyaan belum dijawab
    $sukses = $jmldata - $t;

    //tampilkan pertanyaan belum dijawab
    echo "Sebanyak<b> $sukses</b> Pertanyaan Belum Dijawab</p>";

    //tampilkan jumlah pertanyaan yang dijawab
    echo "<p>Ada Sebanyak <p>$t</p> Pertanyaan yang berhasil dijawab</p>";

    //tampilkan jumlah jawaban benar
    echo "<p>Jawaban benar sebanyak<b> $b[jml]</b> Jawaban</p>";

    //tampilkan jumlah pertanyaan yang salah menjawab
    echo "<p>Ada sebanyak <b>$salah</b></p> Pertanyaan salah dijawab</p>";

    //tampikan tombol selesai test
    echo "<p>&nbsp;</p>";
    echo "<a href='simpan.php?act=selesai' class='button add'>Selesai</a>";
}
} else { //tampilkan halamn soal ketika test belum selesai
    echo "<br>Halaman : ";
    $hal = mysqli_query($konek, "SELECT * FROM tabel_soal");

    $jmldata = mysqli_num_rows($hal);
    $jmlhalaman = cell($jmldata / $batas);
        for ($i = 1; $i <= $jmlhalaman;$i++ ) {
        echo "<a href=$_SERVER[PHP_SELF]?halaman = $i > $i</a> | ";
        }
        else {
            echo "<br>$i</br>"
        }
}


?>