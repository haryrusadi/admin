<?php
include "database.php";
//mengambil data
$data_jumlah= mysqli_query($conn,"SELECT * FROM registrasi");
//menghitung jumlah data
$jumlah = mysqli_num_rows($data_jumlah);

?>