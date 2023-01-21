<?php
include("konkesi.php"); //include config file
$module = $_GET['module'];
$act = $_GET['act'];
$halaman = $_POST['halaman'] + 1;

//Input Jawaban
if ($module == 'jawaban' and $act == 'input') {
    $input = "INSERT INTO jawaban (id_soal, jawaban) VALUES ('$_POST[id_soal]', '$_POST[id_soal]', '$_POST[jawaban]')";
    mysqli_query($konek, $input);
}
?>