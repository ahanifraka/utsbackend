<?php

require "./config.php";

session_start();

$id = @$_GET["id"];

if (empty($username)) {
    header("location: ./hal_dosen.php");
} else {
    $query = "DELETE FROM user where id='$id'";

    mysqli_query($sambung, $query);

    if ($query) {
        header("location: rekap_nilai.php");
    } else {
        die("Gagal Menghapus Data");
    }
}

?>