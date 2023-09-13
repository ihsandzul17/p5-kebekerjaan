<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <i class="card-text">Kegiatan hari ini</i>
            <h1>Kedatangan</h1>
            <h1>Tamu</h1>
        </div>
        <div class="card2" style="width: 18rem;">
            <div class="card-body2">
                <h5 class="card-title2">Card title</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary2">Card subtitle</h6>
                <p class="card-text2">Tempat : Balai Krida
                    Koordinator : Ihsan dzul
                    Waktu : 11.00 - 13.00
                    Diharapkan nama berikut untuk berikut serta dalam acara ini :
                    Syamil</p>
            </div>
        </div>
        <div class="container">

            <button type="submit" class="btn btn-primary" name="sebelumnya">Sebelumnya</button>
            <button type="submit" class="btn btn-primary" name="selanjutnya">Selanjutnya</button>
        </div>
    </div>
</body>

</html>