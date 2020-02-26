<?php
require("connection.php");

if (isset($_POST['simpan'])) {
    $a = $_POST["act"];
    $b = $_POST["wbs_number"];
    $c = $_POST["master_budget"];
    $d = $_POST["PR"];
    $e = $_POST["PV"];
    $f = $d + $e;
    $g = $c - $f;
    $h = $_POST["ratio"];

    //INSERT INTO `db_infb2`.`pengguna` (`id`, `user_name`, `password`, `level`, `foto`) VALUES (NULL, 'u', '1d', 'L', 'm');

    $q = "INSERT INTO `tbl_data`
						(`act`, `wbs_number`, `master_budget`, `PR`, `PV`, `realization`,`available`,`ratio`,`id`)
					VALUES 
						( '$a', '$b', '$c','$d', '$e','$f','$g','$h',NULL )";


    mysqli_query($var_connection, $q);

    //aksi upload
    // $nama_direktori = "../assetss/img/profile";
    // move_uploaded_file($tmp_file, $nama_direktori . "/" . $nama_baru);
    // header('Location:index.php');
}
