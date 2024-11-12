<?php

session_start();

$message = '';
if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .card {
    text-align: center;
    margin-top: 50px;
    margin-left: 75vh;
    /* font-weight: 400; */
    background-image: linear-gradient(rgb(3, 3, 38), rgba(16, 108, 221, 0.642));
}

.hai{
    font-weight: 200;
}

body {
    background-image: linear-gradient(rgb(7, 7, 72), rgb(148, 152, 244));
    background-size: cover;
    height: 100vh;
    overflow: hidden;

}

/* .akun{
    background-color: white;
    border-radius: 10px;
    border: 10px;
} */

/* .iya{
    background-image: linear-gradient(rgb(17, 17, 247), rgb(124, 127, 212));
    font-weight: 500;
    border-radius: 20px;
} */

/* .iya:hover{
    background-color: white;
    color: black;
}

.saya{
    padding-top : 50px;
} */


</style>

<body>
<div class="card card-body border border-dark text-light mt-5" style="width: 30rem; height: 27rem; border-radius: 20px; background: transparent;">
        <h4 class="text-center mt-3">LOGIN</h4>
        <form action="./ctrl_login.php" method="POST">
            <div>
                <div class="mt-5">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Masukkan Username" required>
                </div>
                <div class="mt-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan Password" required>
                </div>
            </div>

            <?php if (isset($message)): ?>
                <p style="color: red; font-style: italic;"><?= $message ?></p>
            <?php endif ?>

            <input type="submit" name="submit" value="Login" class="btn btn-primary mt-5" style="margin-left: 350px;">
        </form>
    </div>
</body>

</html>