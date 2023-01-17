<?php
if ($halaman>$jmldata) {//Jika test sudah selesai dikerjakan
    echo "<p>Dari Total Jumlah <b>$jmldata</b> Soal,";
}

//Hitung Pertanyaan yang mempunyai jawaban benar
$jawab = mysqli_query($konek, "SELECT count(jawaban.jawaban) as jml FROM tabel_soal, jawaban WHERE jawaban.id_soal = tabel_soal.id_soal AND jawaban.jawaban = tabel_soal.jawaban_benar)";

?>