<?php
include("koneksi.php");
echo"<table><tr>
        <th>No</th>
        <th>Pertanyaan</th>
        <th>Pilihan A</th>
        <th>Pilihan B</th>
        <th>Pilihan C</th>
        <th>Pilihan D</th>
        <th>Jawaban Benar</th>
        </tr>";
        $query = "SELECT * FROM tabel_soal ORDER BY id_soal ASC";
        $data = mysqli_query($konek, $query);
        $no = 1;
        while($d = mysqli_fetch_array($data)) {
            echo "<tr>
                <td>$d[pertanyaan]</td>
                <td>$d[pilihan_a]</td>
                <td>$d[pilihan_b]</td>
                <td>$d[pilihan_c]</td>
                <td>$d[pilihan_d]</td>
                <td>$d[jawaban_benar]</td>
                <td><a href=\"form_update.php?id=$d[id_soal]\">Edit Data</a></td>
            </tr>";
            $no++;
        }
echo"</table>";
?>