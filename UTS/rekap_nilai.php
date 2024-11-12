<?php

session_start();

$username = @$_SESSION['username'];
$password = @$_SESSION['password'];

$akses = @$_SESSION["akses"];

require "./config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rekapitulasi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="nilai.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    /* .profile{
    background-color: white;
    border-radius: 100%;
    aspect-ratio: 2/2;
} */

    .dsh {
        font-family: Inknut Antiqua;
        background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
        display: block;
        height: 100vh;
    }

    .bg-custom {
        background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
    }

    .bg-custom2 {
        background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
    }

    /* img {
    display: flex;
    float: right;
    width: 100px;
    margin-top: -50px;
} */

    #menu a {
        display: block;
        text-decoration: none;
        color: black;
    }

    .mt-custom {
        margin-top: 100px;
        border-radius: 20px;
        background-color: white;
        width: 70%;
        margin-left: 35px;
    }

    .mt-custom:hover {
        background-image: linear-gradient(rgb(17, 17, 247), rgb(206, 207, 236));
    }

    .btn-custom {
        margin-left: 25px;
        font-size: 18px;
        background-color: white;
        width: 80%;
        border-radius: 10px;
    }

    .btn-custom:hover {
        background-image: linear-gradient(rgb(17, 17, 247), rgb(206, 207, 236));
        color: black;
    }

    .btn-custom2 {
        font-size: 18px;
        background-color: gray;
        width: 100%;
        color: white;
        border-radius: 0%;
        margin-top: 400px;
    }

    .btn-custom2:hover {
        background-color: black;
        color: black;
    }

    .card-custom {
        height: 250px;
        background-color: gray;
        border-radius: 50px;
    }

    .bg-sidebar {
        background-image: linear-gradient(rgb(7, 7, 72), rgb(219, 220, 249));
        margin: 30px;
        border-radius: 20px;
    }

    .card-body {
        background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
        border-radius: 20px;
    }

    .table {
        --bs-table-color: white;
        --bs-table-bg: transparent;
    }
</style>

<body class="dsh">
        <div class="container-fluid">
            <div class="row" style="height: 100vh">
                <div class="col-2 bg-sidebar text-white p-0" id="sidebar">
                    <div class="py-4 text-center" id="identitas">
                        <img src="profile.png" class="w-50 mt-2" alt="" /><br />
                        <h5 class="fw-bold mt-3">
                            Ahmad Hanif Raka Nayaka <br />23.01.5034
                        </h5>
                    </div>
                    <div class="text-center text-dark" id="menu">
                        <a href="hal_dosen.php" class="btn btn-custom mt-5"><span class="fw-bold">Dashboard</span></a>
                        <a href="halaman_tambah_mhs.php" class="btn btn-custom mt-5"><span class="fw-bold">Tambah Data</span></a>
                        <a href="rekap_nilai.php" class="btn btn-custom mt-5"><span class="fw-bold">Rekapitulasi
                                Nilai</span></a>
                        <a href="login.php" class="mt-custom"><span class="iya fw-bold">Log Out</span></a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="container mt-3">
                        <div class="row mb-3">
                            <div class="col-md-10">
                                <div class="card bg-sidebar">
                                    <div class="card-header">
                                        <h2 class="text-white mt-2" style="margin-left: 30px">Rekapitulasi Nilai</h2>
                                    </div>
                                </div>
                                <?php
                                $sql = "SELECT * FROM user where level='mahasiswa'";
                                $result = mysqli_query($sambung, $sql);
                                ?>
                                <div class="card bg-sidebar mt-5">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th scope="row">Nomer</th>
                                                        <th scope="row">Mahasiswa</th>
                                                        <th scope="row">Diskusi (14%)</th>
                                                        <th scope="row">Praktikum (26%)</th>
                                                        <th scope="row">Responsi (15%)</th>
                                                        <th scope="row">UTS (20%)</th>
                                                        <th scope="row">UAS (25%)</th>
                                                        <th scope="row">Nilai</th>
                                                        <th scope="row">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    $rows = array();
                                                    while ($data = mysqli_fetch_array($result)) {

                                                        $total = ($diskusi = $data['diskusi'] * 0.14 + $praktikum = $data['praktikum'] * 0.26 +
                                                            $responsi = $data['responsi'] * 0.15 + $uts = $data['uts'] * 0.20 + $uas = $data['uas'] * 0.25);

                                                        $rows[] = [
                                                            'id' => $data['id'],
                                                            'username' => $data['username'],
                                                            'diskusi' => $data['diskusi'],
                                                            'praktikum' => $data['praktikum'],
                                                            'responsi' => $data['responsi'],
                                                            'uts' => $data['uts'],
                                                            'uas' => $data['uas'],
                                                            'total' => $total,
                                                        ];
                                                    }


                                                    ?>
                                                <tbody>
                                                    <?php foreach ($rows as $r): ?>
                                                        <tr>
                                                            <td><?= $r['id']; ?></td>
                                                            <td><?= $r['username']; ?></td>
                                                            <td><?= $r['diskusi']; ?></td>
                                                            <td><?= $r['praktikum']; ?></td>
                                                            <td><?= $r['responsi']; ?></td>
                                                            <td><?= $r['uts']; ?></td>
                                                            <td><?= $r['uas']; ?></td>
                                                            <td><?= number_format($r['total'], 2); ?></td>
                                                            <td>
                                                                <a href="update.php?id=<?= $r['id']; ?>"
                                                                    class="btn btn-success">Edit</a>
                                                                <a href="delete.php?id=<?= $r['id']; ?>"
                                                                    onclick="return confirm('Sure Data Will Be Deleted');"
                                                                    class="btn btn-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>

</html>