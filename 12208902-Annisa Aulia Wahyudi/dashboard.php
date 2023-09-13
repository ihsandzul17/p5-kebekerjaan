<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url(gedung.jpg);
        background-size: cover;
 
    }
    nav{
        background-color: #fff;
        width: 80rem;
        height: 77px;
    }
    nav img{
        width: 70px;
    }
    nav p{
        color: #001062;
        font-size: 20px;
        font-weight: 400;
        margin-top: -60px;
        padding-left: 80px;
    }
    .kata{
        color: #FFF;
        text-align: center;
        font-family: Times;
        font-size: 40px;
        font-weight: 400;
        letter-spacing: 3.36px;

        display: flex;
        width: 861px;
        height: 96px;
        margin-left: 25px;
        
    }

    .kata p{
        font-family:Book;
        margin-top: 10rem;
        
    }
    .btn{
        background-color: #2D73FA;
        width: 21rem;
        height: 3rem;
        flex-shrink: 0;
        border-radius: 7px;
        margin: 9px;
    }
    .btn1{
        background-color: #2D73FA;
        width: 21rem;
        height: 3rem;
        flex-shrink: 0;
        border-radius: 7px;

    }
    .kata2 {
        color: white;
        font-size: 20px;
        margin-top: 15rem;
        margin-left: 40px;
    }
    .btnn{
        padding-top: 50px;
    
    }

</style>
<body>
    <nav>
        <img src="logo.png">
        <p>SMK Wikrama <br>Bogor</p>
    </nav>
    <div class="kata">
        <b><p>SELAMAT DATANG DI SMK <br> WIKRAMA BOGOR</p></b>
    </div>
    <div class="kata2">
        <p>Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara <br>klik PENDAFTARAN PPDB dibawah ini!<br> Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</p>
    </div>
    <div class="btnn">
        <button class="btn">BROWSE</button>
        <button class="btn1">UPLOAD</button>
    </div>
</body>
</html>

