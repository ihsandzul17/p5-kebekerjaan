<?php

session_start();
include 'backend.php';

if (!isset($_SESSION['loggedIn'])) {
    header("Location: login.php");
}

$index = 1;

if (isset($_GET['increment'])) {
    $index++;
} elseif (isset($_GET['decrement'])) {
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="js/script.js" defer></script>
</head>

<body>
    <section>
        <div class="sidebarContainer">
            <!-- <div class="logo">
            <img src="img/logo.png">
        </div> -->
            <div class="sidebarContent">
                <div class="sidebarText">
                    <h1>17 Maret</h1>
                    <p>Jumlah kegiatan hari ini</p>
                </div>
                <div class="sidebarKegiatanBox">
                    <div class="boxRedContainer">
                        <div class="box boxRed">7</div>
                        <p>Penting</p>
                    </div>
                    <div class="boxGreenContainer">
                        <div class="box boxGreen">3</div>
                        <p>Biasa </p>
                    </div>
                </div>
                <div class="wrapper">
                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                            <span id="prev" class="material-symbols-rounded">chevron_left</span>
                            <span id="next" class="material-symbols-rounded">chevron_right</span>
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

        <div class="main">
            <?php 
            $ambil = "SELECT * from information WHERE id='$index'";
            $query = mysqli_query($conn, $ambil);
            if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_assoc($query)) { ?>
            <h2 class="namaKegiatan"><?= $data["ketKegiatan"] ?></h2>
            <div class="flexKegiatan">
            <div class="kegiatanContainer">
                <div class="kegiatanInformation">
                    <p>Penanggung jawab : <?= $data["penanggungJawab"] ?></p>
                    <p>Tempat : <?= $data["tempat"] ?></p>
                    <p>Waktu : <?= $data["waktuAwal"] ?> - <?= $data["waktuAkhir"] ?></p>
                </div>
                <div class="kegiatanDescription">
                    <p><?= $data["deskripsiKegiatan"] ?></p>
                </div>
                <?php } } ?>
            </div>
            <img src="img/presentasi.png" alt="gambar kegiatan">
            </div>
            <form action="" method="GET">
                <button type="submit" class="controlButton dec" name="decrement" class="sidebarButton">Sebelumnya</button>
                <button type="submit" class="controlButton inc" name="increment" class="sidebarButton">Selanjutnya</button>
            </form>
        </div>
    </section>
</body>
</html>