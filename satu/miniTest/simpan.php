<?php
include("konkesi.php"); //include config file
$module = $_GET['module'];
$act = $_GET['act'];
$halaman = $_POST['halaman'] + 1;

//Input Jawaban
if ($module == 'jawaban' and $act == 'input') {
    $input = "INSERT INTO jawaban (id_soal, jawaban) VALUES ('$_POST[id_soal]', '$_POST[id_soal]', '$_POST[jawaban]')";
    mysqli_query($konek, $input);

    header('location: media.php?halaman=' . $halaman);
}
//update jawaban
elseif ($module == 'jawaban' and $act == 'update') {
    $upadate = "UPDATE jawaban SET jawaban = '$_POST[jawaban]' WHERE id_soal = '$_POST[id_soal]'";
    mysqli_query($konek, $upadate);

    header('location: media.php?halaman=' . $halaman);
}

//Selesai test
elseif ($act == 'selesai') {
    $query = "DELETE FROM jawaban";
    mysqli_query($konek, $query);
    header('location: media.php?halaman=' . $halaman);
}
?>