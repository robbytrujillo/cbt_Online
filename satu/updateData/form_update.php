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
         
         </table>
?>