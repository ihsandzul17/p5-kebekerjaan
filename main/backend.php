<?php
$conn = mysqli_connect("localhost", "root", "", "projekP5");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $namaKegiatan = $_POST["namaKegiatan"];
    echo $penanggungJawab = $_POST["penanggungJawab"];
    echo $Tempat = $_POST["Tempat"];
    echo $waktuAwal = $_POST["waktuAwal"];
    echo $waktuAkhir = $_POST["waktuAkhir"];
    echo $deskripsiKegiatan = $_POST["deskripsiKegiatan"];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
    }

    $sql = mysqli_query($conn, "INSERT INTO information (ketKegiatan, penanggungJawab, tempat, deskripsiKegiatan, waktuAwal, waktuAkhir, img) VALUES ('$namaKegiatan', '$penanggungJawab', '$Tempat', '$deskripsiKegiatan', '$waktuAwal', '$waktuAkhir', '$imagePath')");
    if ($sql) {
        echo "<script>alert('Data tertkirim')</script>";
        header("location: index.php");
    } else {
        echo "Data gagal terkirim";
    }
}
?>