<?php
    include ("koneksi.php"); //koneksi ke database
    //Identifikasi data mana yang Akan di ubah
    $query = "SELECT * FROM tabel_soal WHERE id_soal='$_GET[id]'";
    $hasil = mysqli_query($konek, $query);
    $d     = mysqli_fetch_array($hasil);
    echo "<form method=\"POST\" enctype=\"multipart/form-data\" 
         action=\"simpan.php\">
         <table>
         <tr><td>Soal / Pertanyaan </td></tr> :
         <input type=\"text\" style=\"width: 400px;\" name=\"pertanyaan\" 
         value=\"$d[pertanyaan]\"></td></tr>
         <tr><td>Jawaban A</td></tr> : <input type=\"text\" style=\"width: 400px;\"
         name=\"jawaban_a\" value=\"$d[pilihan_a]\"></td></tr>
         <tr><td>Jawaban B</td></tr> : <input type=\"text\" style=\"width: 400px;\"
         name=\"jawaban_b\" value=\"$d[pilihan_a]\"></td></tr>
         <tr><td>Jawaban A\C</td></tr> : <input type=\"text\" style=\"width: 400px;\"
         name=\"jawaban_c\" value=\"$d[pilihan_a]\"></td></tr>
         <tr><td>Jawaban D</td></tr> : <input type=\"text\" style=\"width: 400px;\"
         name=\"jawaban_d\" value=\"$d[pilihan_a]\"></td></tr>

         <tr><td>Jawaban Benar</td></tr> : <input type=\"text\"  name=\"jawaban_benar\" 
         value=\"$d[jawaban_benar]\"></td></tr>

         <tr><td colspan=\"2\"><input type=\"submit\" value=\"simpan\"> | 
         <input type=\"button\" value=\"Batal\"
         </table>
         </form>";
?>