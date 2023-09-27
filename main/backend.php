<?php
$conn = mysqli_connect("localhost", "root", "", "projekP5");

function isDataExists() {
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM information");
    if (mysqli_num_rows($query) == 0) {
        return false;
    } else {
        return true;
    }
}

function getJumlahKegiatan() {
    global $conn;
    $queryPertama = mysqli_query($conn, "SELECT * FROM information WHERE urgensiKegiatan='Biasa'");
    $queryKedua = mysqli_query($conn, "SELECT * FROM information WHERE urgensiKegiatan='Penting'");
    $jumlahBiasa = mysqli_num_rows($queryPertama);
    $jumlahPenting = mysqli_num_rows($queryKedua);
    $jumlahKegiatan = [
        "Penting" => "$jumlahPenting",
        "Biasa" => "$jumlahBiasa"
    ];
    return $jumlahKegiatan;
}

if (isset($_POST["submit"])) {
    $namaKegiatan = $_POST["namaKegiatan"];
    $penanggungJawab = $_POST["penanggungJawab"];
    $Tempat = $_POST["Tempat"];
    $waktuAwal = $_POST["waktuAwal"];
    $waktuAkhir = $_POST["waktuAkhir"];
    $deskripsiKegiatan = $_POST["deskripsiKegiatan"];
    $tanggal = $_POST["Tanggal"];
    $urgensiKegiatan = $_POST["urgensiKegiatan"];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
    }

    $getLastIDQuery = mysqli_query($conn, "SELECT MAX(id) AS last_id FROM information");
    $lastIDResult = mysqli_fetch_assoc($getLastIDQuery);
    $lastID = $lastIDResult["last_id"];

    $newID = $lastID + 1;

    $sql = mysqli_query($conn, "INSERT INTO information (id, urgensiKegiatan, ketKegiatan, penanggungJawab, tempat, deskripsiKegiatan, waktuAwal, waktuAkhir, img, tanggal) VALUES ('$newID', '$urgensiKegiatan', '$namaKegiatan', '$penanggungJawab', '$Tempat', '$deskripsiKegiatan', '$waktuAwal', '$waktuAkhir', '$imagePath', '$tanggal')");

    if ($sql) {
        header("location: index.php");
    } else {
        echo "Data gagal terkirim";
    }
}
?>
