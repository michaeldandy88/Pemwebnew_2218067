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
                    <li><a href="login.php">Login</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="" class="button1">Register</a></li>
                </ul>
            </div>
    </nav>
    <div class="container">
                <div class="Register form">
                    <header>Form Registrasi</header>
                    <form action="prosesregister.php" method="post">
                        <input type="username" name="username" placeholder="Masukkan Username">
                        <input type="password" name="password"  placeholder="Masukkan Password">
                        <input type="email" name="email" placeholder="Masukkan Ulang Email">
                        <button type="submit" class="btn_login" name="register"
				id="register">
				Register
		    </button>
                    </form>
                    <div class="signup">
                        <span class="signup">Sudah Punya Akun?</span>
                        <label for="check">Login</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>