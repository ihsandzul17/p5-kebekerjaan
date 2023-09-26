<?php
$correctUsername = "user";
$correctPassword = "pass";
session_start();

if (isset($_POST['login'])) {
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];

    if ($submittedUsername === $correctUsername && $submittedPassword === $correctPassword) {
        $_SESSION['loggedIn'] = true;
        header("Location: index.php");
    } else {
        $errorMessage = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<style>
    img {
        width: 200px;
        margin-left: 80px;
    }
</style>

<body class="login">
    <div class="loginContainer">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <form action="" method="post">
                        <img src="./img/logo.png" alt="">
                        <br>
                        <label class="loginLabel" for="username">Username: </label>
                        <br>
                        <input class="loginInput" type="text" name="username" id="username" required autofocus autocomplete="off">
                        <br>
                        <label class="loginLabel" for="password">Password: </label>
                        <br>
                        <input class="loginInput" type="password" name="password" id="password">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary login" name="login" class="loginButton">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($errorMessage)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $errorMessage; ?>
    </div>
    <?php endif; ?>

</body>

</html>
