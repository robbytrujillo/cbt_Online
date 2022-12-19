<?php
echo "<br><br><br>
<form method=\"POST\" enctype=\"multipart/form-data\" action=\"simpan.php\">

<table>
<tr><td>Soal / Pertanyaan </td><td> : <input type=\"text\" style=\"width: 400px;\" name=\"pertanyaan\"></td></tr>

<tr><td>Jawaban A </td><td> : <input type=\"text\" style=\"width: 400px;\" name=\"jawaban_a\"></td></tr>
<tr><td>Jawaban B </td><td> : <input type=\"text\" style=\"width: 400px;\" name=\"jawaban_b\"></td></tr>
<tr><td>Jawaban C </td><td> : <input type=\"text\" style=\"width: 400px;\" name=\"jawaban_c\"></td></tr>
<tr><td>Jawaban D </td><td> : <input type=\"text\" style=\"width: 400px;\" name=\"jawaban_d\"></td></tr>

<tr><td>Jawaban Benar </td><td> : <input type=\"text\" name=\"jawaban_benar\"></td></tr>
<tr><td colspan=\"2\"><input type=\"submit\" value=\"Simpan\">
</table>
</form>";
?>