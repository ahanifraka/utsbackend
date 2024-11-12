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
  <title>Halaman Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script language="JavaScript" type="text/javascript">
    function Hapus() {
      return confirm('Apakah anda yakin ingin menghapus?');
    }
  </script>
</head>
<style>
  .profile {
    background-color: white;
    border-radius: 100%;
    aspect-ratio: 2/2;
  }

  .dsh {
    font-family: Inknut Antiqua;
    background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
  }

  .bg-custom {
    background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
  }

  .bg-custom2 {
    background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
  }

  .img {
    display: flex;
    float: right;
    width: 100px;
    margin-top: -50px;
  }

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
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .bg-sidebar {
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
      <div class="row" style="height: 100vh">
        <div class="col-2 bg-sidebar text-white p-0" id="sidebar">
          <div class="py-4 text-center" id="identitas">
            <img src="profile.png" class="w-50 mt-2" alt="" /><br />
            <h5 class="fw-bold mt-3"> Dashboard Dosen <br /></h5>
          </div>
          <div class="text-center text-dark" id="menu">
            <a href="hal_dosen.php" class="btn btn-custom mt-5"><span class="fw-bold">Dashboard</span></a>
            <a href="halaman_tambah_mhs.php" class="btn btn-custom mt-5"><span class="fw-bold">Tambah Data</span></a>
            <a href="rekap_nilai.php" class="btn btn-custom mt-5"><span class="fw-bold">Rekapitulasi Nilai</span></a>
            <a href="login.php" class="mt-custom"><span class="iya fw-bold">Log Out</span></a>
          </div>
        </div>
        <div class="col-9">
          <div class="container mt-5">
            <div class="row mb-3">
              <div class="col-md-10">
                <div class="card bg-sidebar">
                  <div class="card-body">
                    <h2 class="text-white mt-1" style="margin-left: 100px">
                      Dashboard
                      <span class="float-end" style="margin-right: 50px"><i class="fa-solid"></i></span>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10">
                <div class="card bg-sidebar">
                  <div class="card-body py-5">
                    <div class="row d-flex justify-content-between">
                      <div class="col-md-5">
                        <div class="card" style="border-radius: 30px">
                          <div class="card-body py-3">
                            <h3 class="text-decoration-none text-dark">
                              
                              <a href="halaman_tambah_mhs.php"><span class="float-end text-center fa-solid text-dark" style="">Add Data</span></a>
                            </h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="card" style="border-radius: 30px">
                          <div class="card-body py-3">
                            <h3 class="text-decoration-none text-dark">
                              
                              <a href="rekap_nilai.php"><span class="float-end fa-solid fa-arrow-right text-center text-dark"
                                  style="margin-right: 20px">Value Recap</span></a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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