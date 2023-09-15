<?php
$conn = mysqli_connect("localhost", "root", "", "projekP5");


if (isset($_POST["submit"])) {
    $namaKegiatan = $_POST["namaKegiatan"];
    $penanggungJawab = $_POST["penanggungJawab"];
    $Tempat = $_POST["Tempat"];
    $waktuAwal = $_POST["waktuAwal"];
    $waktuAkhir = $_POST["waktuAkhir"];
    $deskripsiKegiatan = $_POST["deskripsiKegiatan"];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
    }

    $getLastIDQuery = mysqli_query($conn, "SELECT MAX(id) AS last_id FROM information");
    $lastIDResult = mysqli_fetch_assoc($getLastIDQuery);
    $lastID = $lastIDResult["last_id"];

    $newID = $lastID + 1;

    $sql = mysqli_query($conn, "INSERT INTO information (id, ketKegiatan, penanggungJawab, tempat, deskripsiKegiatan, waktuAwal, waktuAkhir, img) VALUES ('$newID', '$namaKegiatan', '$penanggungJawab', '$Tempat', '$deskripsiKegiatan', '$waktuAwal', '$waktuAkhir', '$imagePath')");

    if ($sql) {
        header("location: index.php");
    } else {
        echo "Data gagal terkirim";
    }
}
?>
