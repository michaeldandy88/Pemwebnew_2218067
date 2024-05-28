<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>WarungRokok.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="#login">Login</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="register.php" class="button1">Register</a></li>
                </ul>
            </div>
    </nav>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Form Login</header>
            <form action="proseslogin.php" method="post">
                <input class=input type="text" id="user" name="username" placeholder="Masukkan User"/>
                <input class=input type="password" id="pass" name="password" placeholder="Masukkan Password"/>
                <a href="#">Lupa Password?</a>
                <button type="submit" onclick="submitLoginForm()" class= "btn_login" name = "login" id = "login">LOGIN</button>
                <div class="signup">
                    <span>Belum Punya Akun?</span>
                    <label for="check">Daftar</label> 
                </div>
            </form>
        </div>
    </div>
     <?php
     //Proses validasi login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username === "mikeldan" && $password === "102030") {
            // Login berhasil
            setcookie("loggedIn", "true", time() + (86400 * 30), "/");
            header("Location: admin.php");
            exit();
        } else {
            // Login gagal
            echo "
            <script>alert('Login gagal. Periksa kembali username dan password Anda.');</script>";
        }
    }
    ?>
</body>
</html>