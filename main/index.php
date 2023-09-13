<?php
session_start();
include 'backend.php';

if (!isset($_SESSION['loggedIn'])) {
    header("Location: login.php");
}
$index = 1;

if (isset($_POST['increment'])) {
    $index++;
} elseif (isset($_POST['decrement'])) {
    if ($index <= 1) {
        $index = 1;
    } else {
    $index--;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400&display=swap');

    body {
        background-color: #ffff;
        overflow: hidden;
    }

    .card {
        background-color: #22668D;
        height: 43.1rem;
        width: 25rem !important;
        border-radius: 0px;
    }

    .card-body {
        margin-top: 35px !important;
        color: #ffff;
        font-family: 'poppins';
    }

    .card2 {
        background-color: #ffff;
        margin-bottom: 15rem;
        margin-left: 50px;
        border-radius: 5px;
    }

    button {
        width: 150px;
        margin-left: 30px;
    }

    .container {
        display: flex;
        padding-right: 50px;
    }
</style>

<body>
    <?php
    $ambil = "SELECT * from information WHERE id='$index'";
    $query = mysqli_query($conn, $ambil);
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_assoc($query)) { ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <i class="card-text">Kegiatan hari ini</i>
                    <h1>
                        <?= $data["ketKegiatan"]; ?>
                    </h1>
                </div>
                <div class="card2" style="width: 18rem;">
                    <div class="card-body2">
                        <h5 class="card-title2">Koordinator :
                            <?= $data["namaKoordinator"]; ?>
                        </h5>
                        <h5 class="card-title2">Tempat :
                            <?= $data["tempat"]; ?>
                        </h5>
                        <h5 class="card-title2">Waktu :
                            <?= $data["waktuAwal"] . "-" . $data["waktuAkhir"]; ?>
                        </h5>
                        <p class="card-text2">Note :
                            <?= $data["note"]; ?>
                        </p>
                    </div>
                </div>
                <div class="container">
                    <form action="" method="POST">
                        <button type="submit" class="btn btn-primary" name="decrement">Sebelumnya</button>
                        <button type="submit" class="btn btn-primary" name="increment">Selanjutnya</button>
                    </form>
                </div>
            </div>
        <?php }
    } ?>
</body>

</html>
