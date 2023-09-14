<?php

session_start();
include 'backend.php';

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

    <style>

    body {
        background-color: #F0F4F5;
    }
    .form-container {
            padding: 20px;
            border-radius: 10px;
            width: 80%; 
            margin: 20px auto; 
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .back-arrow {
            position: absolute;
            top: 20px;
            left: 20px;
            cursor: pointer;
        }

        .back-arrow svg {
            width: 30px; 
            height: 30px; 
            fill: #2D928C; 
            transform: rotate(270deg);
        }

        .form-container h2 {
            font-size: 24px; 
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px; 
        }

        .form-control.waktu-input {
            width: 140px; 
            display: inline-block;
            margin-right: 10px; 
        }

        textarea.form-control {
            height: 100px; 
            resize: vertical;
        }

        input[type="file"].form-control {
            border: none; 
            padding: 5px 0;
        }

        .btn.btn-primary {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #2D928C;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px; 
            cursor: pointer;
        }

        .btn.btn-primary:hover {
            background-color: #22668D; 
        }

    </style>
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
        <div class="form-container">
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
                <label>Waktu</label>
                <input type="time" class="form-control waktu-input" name="waktuAwal">
                <input type="time" class="form-control waktu-input" name="waktuAkhir">
                <label for="textArea">Note</label>
                <textarea class="form-control" id="textArea" name="deskripsiKegiatan"></textarea>
                <label for="image">Upload Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                <input type="submit" class="btn btn-primary" name="submit">
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>