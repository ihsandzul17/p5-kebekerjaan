<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

    <style>
        .card{
            margin-top:120px;
            background-color:rgba(0, 0, 0, 0.5);
            height:30rem;
        }

        body{
            background: url(Gedung.jpg)no-repeat;
            background-size:cover;
        }

        h1{
            text-align: center;
        }

        label{
            color:#ffff;
        }

        input{
            width:23rem;
        }

        button a{
            color:#ffff;
            text-decoration:none;
        }

        button{
            margin-left: 60px;
            width:15rem;
        }

        .btn.btn-primary {
            background-color: green;
        }

        h6{
            margin-top:15px;
            color:#ffff;
            font-family:"Gungsuh";
        }

        img{
            width:200px;
            margin-left:80px;
        }

    </style>
<body>
        <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 25rem;">
            <div class="card-body">
    <form action="" method="post">
        <img src="wkwk-removebg-preview.png" alt="">
        <br>
        <label for="username">Username: </label>
        <br>
        <input type="text" name="username" id="username" required autofocus autocomplete="off">
        <br>
        <label for="password">Password: </label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>