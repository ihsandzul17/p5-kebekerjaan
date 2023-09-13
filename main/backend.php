<?php
$conn = mysqli_connect("localhost", "root", "", "projekP5");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $namaKegiatan = $_POST["namaKegiatan"];
    $namaKoordinator = $_POST["namaKoordinator"];
    $Tempat = $_POST["Tempat"];
    $waktuAwal = $_POST["waktuAwal"];
    $waktuAkhir = $_POST["waktuAkhir"];
    $note = $_POST["note"];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
    }

    $sql = mysqli_query($conn, "INSERT INTO information (ketKegiatan, namaKoordinator, tempat, note, waktuAwal, waktuAkhir, img) VALUES ('$namaKegiatan', '$namaKoordinator', '$Tempat', '$note', '$waktuAwal', '$waktuAkhir', '$imagePath')");
    if ($sql) {
        echo "<script>alert('Data tertkirim')</script>";
        header("Location: index.php");
    } else {
        echo "Data gagal terkirim";
    }
}
?>