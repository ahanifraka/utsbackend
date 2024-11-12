<?php

include "./config.php";

$id = @$_GET["id"];
$query = mysqli_query($sambung, "SELECT * from user where id='$id'");

$username = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="data.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
.dsh {
    font-family: Inknut Antiqua;
    background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
    display: block;
}

.bg-custom {
    background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
}

.bg-custom2 {
    background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
}

#menu a {
    display: block;
    text-decoration: none;
    color: black;
}

.mt-custom{
    margin-top: 100px;
    border-radius: 20px;
    background-color: white;
    width: 70%;
    margin-left: 35px;
}

.mt-custom:hover{
    background-image: linear-gradient(rgb(17, 17, 247), rgb(206, 207, 236));
}

.btn-custom{
    margin-left: 25px;
    font-size: 18px;
    background-color: white;
    width: 80%;
    border-radius: 10px;
}

.btn-custom:hover{
    background-image: linear-gradient(rgb(17, 17, 247), rgb(206, 207, 236));
    color: black;
}

.btn-custom2{
    font-size: 18px;
    background-color: gray;
    width: 100%;
    color: white;
    border-radius: 0%;
    margin-top: 400px;
}

.btn-custom2:hover{
    background-color: black;
    color: black;
}

.card-custom{
    height: 250px;
    background-color: gray;
    border-radius: 50px;
}

.bg-sidebar{
    background-image: linear-gradient(rgb(7, 7, 72), rgb(219, 220, 249));
    margin: 30px;
    border-radius: 20px;
}

.bg-custom3 {
    background-color: gray;
}

.card-footer i {
    margin-left: 15px;
}

.book {
    width: 200px;
    height: 100px;
}
</style>

<body class="dsh">
    <div>
        <div class="container-fluid">
            <div class="row" style="height: 100vh" >
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
                        <a href="rekap_nilai.php" class="btn btn-custom mt-5"><span class="fw-bold">Rekapitulasi Nilai</span></a>
                        <a href="login.php" class="mt-custom"><span class="iya fw-bold">Log Out</span></a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="container mt-3">
                        <div class="row mb-3">
                            <div class="col-md-10">
                                <div class="card bg-sidebar">
                                    <div class="card-header">
                                        <h2 class="text-white mt-2" style="margin-left: 30px">
                                            Edit Nilai Mahasiswa
                                            <span class="float-end" style="margin-right: 50px"><i
                                                    class="fa-solid"></i></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

            <form action="./ctrl_update.php" method="POST">
            <div class="text-light">
                <label for="username">Mahasiswa</label><br>
                <input type="text" id="username" name="username" class="form-control form-label"
                    value="<?php echo $username['username']; ?>">
            </div>
            <div class="text-light">
                <label for="diskusi">Diskusi (14%)</label>
                <input type="number" id="diskusi" name="diskusi" class="form-control form-label"
                    value="<?php echo $username['diskusi']; ?>">
            </div>
            <div class="text-light">
                <label for="praktikum">Praktikum (26%)</label>
                <input type="number" id="praktikum" name="praktikum" class="form-control form-label"
                    value="<?php echo $username['praktikum']; ?>">
            </div>
            <div class="text-light">
                <label for="responsi">Responsi (15%)</label>

                <input type="number" id="responsi" name="responsi" class="form-control form-label"
                    value="<?php echo $username['responsi']; ?>">
            </div>
            <div class="text-light">
                <label for="uts">UTS (20%)</label>
                <input type="number" id="uts" name="uts" class="form-control form-label"
                    value="<?php echo $username['uts']; ?>">
            </div>
            <div class="text-light">
                <label for="uas">UAS (25%)</label>
                <input type="number" id="uas" name="uas" class="form-control form-label"
                    value="<?php echo $username['uas']; ?>">
            </div>
            <input type="submit" value="Simpan" name="edit" class="btn btn-primary">
            <a href="rekap_nilai.php" style="text-decoration: none;" class="btn btn-danger">Kembali</a>
        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>