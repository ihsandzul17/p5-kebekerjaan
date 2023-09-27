<?php

session_start();
require 'backend.php';

if (!isset($_SESSION['loggedIn'])) {
    header("Location: login.php");
}

$index = $_SESSION['index'];

if (isset($_GET['increment'])) {
    $index++;
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

<body class="formBody">
    <section>
        <div class="sidebarContainer">
            <div class="sidebarContent">
                <div class="sidebarText">
                    <h1><?= date('j F') ?></h1>
                    <p>Jumlah kegiatan hari ini</p>
                <?php $jumlahKegiatan = getJumlahKegiatan();?>
                </div>
                <?php if (isDataExists() == true) {?>
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
        <div class="formContainer-form">
            <form method="POST" action="backend.php" enctype="multipart/form-data">
            <div class="back-arrow" onclick="window.location.href='index.php'">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M7.41 16.59L12 12l4.59 4.59L18 16l-6-6-6 6z"/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                </svg>
            </div>
                <h2>Buat agenda baru</h2>
                <label>Nama kegiatan</label>
                <input type="text" class="form-control form" name="namaKegiatan">
                <label>Nama koordinator</label>
                <input type="text" class="form-control form" name="penanggungJawab">
                <label>Tempat</label>
                <input type="text" class="form-control form" name="Tempat">
                <label>Tanggal</label>
                <input type="date" class="form-control form" name="Tanggal">
                <label>Waktu</label>
                <input type="time" class="form-control waktu-input" name="waktuAwal">
                <label>Urgensi Kegiatan</label>
                <select name="urgensiKegiatan">
                    <option>Penting</option>
                    <option>Biasa</option>
                </select>
                <input type="time" class="form-control waktu-input" name="waktuAwal">-
                <input type="time" class="form-control waktu-input" name="waktuAkhir">
                <label for="textArea">Note</label>
                <textarea class="form-control" id="textArea" name="deskripsiKegiatan"></textarea>
                <label for="image">Upload Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                <input type="submit" class="btn btn-primary form" name="submit">
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>