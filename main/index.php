<?php

session_start();
include 'backend.php';

if (!isset($_SESSION['loggedIn'])) {
    header("Location: login.php");
}

$index = $_SESSION['index'];

if (isset($_GET['increment'])) {
    $ambil = "SELECT * from information";
    $query = mysqli_query($conn, $ambil);
    if (mysqli_num_rows($query) > $index) {
        $index++;
    }
} elseif (isset($_GET['decrement'])) {
    if ($index <= 1) {
        $index = 1;
    } else {
        $index--;
    }
}

$_SESSION['index'] = $index;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="js/script.js" defer></script>
</head>

<body>
    <section>
        <div class="sidebarContainer">
            <div class="sidebarContent">
                <div class="sidebarText">
                    <h1><?= date('j F') ?></h1>
                    <p>Jumlah kegiatan hari ini</p>
                <?php $jumlahKegiatan = getJumlahKegiatan();?>
                </div>
                <?php if (isDataExists() == true) { ?>
                <div class="sidebarKegiatanBox">
                    <div class="boxRedContainer">
                        <div class="box boxRed"><?= $jumlahKegiatan["Penting"]?></div>
                        <p>Penting</p>
                    </div>
                    <div class="boxGreenContainer">
                        <div class="box boxGreen"><?= $jumlahKegiatan["Biasa"]?></div>
                        <p>Biasa </p>
                    </div>
                </div>
                <?php } ?>
                <div class="wrapper">
                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                            <span id="prev" class="material-symbols-rounded"><</span>
                            <span id="next" class="material-symbols-rounded">></span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                </div>
                <p><span>Lihat History</span></p>
            </div>
            <a href="form.php"><img src="img/AddButton.svg" alt="add button" class="addButtonSvg"></a>
        </div>

        <div class="indexContainer">
            <?php
            $ambil = "SELECT * from information WHERE id='$index'";
            $query = mysqli_query($conn, $ambil);
            if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) { ?>
                    <h2 class="namaKegiatan"><?= $data["ketKegiatan"] ?></h2>
                    <div class="kegiatanContainer">
                        <div class="kegiatanText">
                            <div class="kegiatanInformation">
                                <p>Penanggung jawab : <?= $data["penanggungJawab"] ?></p>
                                <p>Tempat : <?= $data["tempat"] ?></p>
                                <p>Waktu : <?= $data["waktuAwal"] ?> - <?= $data["waktuAkhir"] ?></p>
                            </div>
                            <div class="kegiatanDescription">
                                <p><?= $data["deskripsiKegiatan"] ?></p>
                            </div>
                        </div>
                        <img src="<?= $data["img"] ?>" alt="gambar kegiatan">
                <?php }
            } ?>
                    </div>
                    <form action="" method="GET">
                        <button type="submit" class="controlButton dec" name="decrement" class="sidebarButton">Sebelumnya</button>
                        <button type="submit" class="controlButton inc" name="increment" class="sidebarButton">Selanjutnya</button>
                    </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>