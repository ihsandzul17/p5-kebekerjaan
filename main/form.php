<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="form-container">
        <form method="POST" action="backend.php" enctype="multipart/form-data">
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
            <input type="submit" class="btn btn-primary">Submit</input>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>