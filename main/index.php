<?php
session_start();
include 'backend.php';

if (!isset($_SESSION['loggedIn'])) {
    header("Location: login.php");
}

$index = $_SESSION['index'];

if (isset($_GET['increment'])) {
    $ambil = "SELECT * from information";
    $query = mysqli_query($conn, $ambil);
    if (mysqli_num_rows($query) > $index) {
        $index++;
    }
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
    <link rel="stylesheet" href="style.css"> <!-- Assuming this is your custom CSS file -->
    <script src="js/script.js" defer></script>
    
    <!-- Add the responsive CSS code here -->
    <style>
        /* Define styles for small screens (e.g., mobile phones) */
        @media screen and (max-width: 600px) {
            body {
                font-size: 14px;
            }

            /* Adjust sidebar and main layout */
            .sidebarContainer {
                display: flex;
                flex-direction: column;
            }

            .main {
                margin-left: 0;
                width: 100%;
            }

            /* Adjust calendar styles */
            .calendar {
                font-size: 12px;
            }
        }

        /* Define styles for larger screens (e.g., tablets and desktops) */
        @media screen and (min-width: 601px) {
            body {
                font-size: 16px;
            }

            /* Reset styles to their original values */
            .sidebarContainer {
                display: flex;
                flex-direction: row;
            }

            .main {
                margin-left: 220px;
                width: calc(100% - 220px);
            }

            /* Reset calendar styles */
            .calendar {
                font-size: inherit;
            }
        }
    </style>
</head>

<body>
    <!-- Your HTML content remains the same -->
    <!-- ... -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
