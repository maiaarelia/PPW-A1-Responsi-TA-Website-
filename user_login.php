<?php 
	include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css_user_login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">


    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        .user-login .block {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin: 0 auto;
            max-width: 500px;
            margin-top: 50px;
            padding-bottom: 40px;
            margin-bottom: 50px; /* Menambahkan margin-bottom untuk jarak dengan footer */
        }

        .user-login .block .title-text {
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 24px;
            color: #5ba3c4; /* Ubah warna judul menjadi hijau innisfree */
        }

        .user-login .block input[type="text"],
        .user-login .block input[type="password"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #5ba3c4;
            width: 100%;
            max-width: 300px;
            background-color: #fff;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .user-login .block button.btn-main-sm {
            background-color: #4196bd; /* Ubah warna tombol menjadi hijau innisfree */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .user-login .block .new-acount a {
            color: #4196bd; /* Ubah warna link menjadi hijau innisfree */
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .user-login .block .new-acount a:hover {
            text-decoration: none;
            color: #4196bd;
        }

        .user-login .block .new-acount p {
            font-size: 14px;
            margin-top: 10px;
            color: black;
        }

        .user-login .block .image img {
            max-width: 100%;
            height: auto;
            margin-top: 30px;
        }
    </style>
</head>
<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

<section class="user-login section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <div class="image align-self-center"><img class="img-fluid" src="img/login.png" alt="Login Image" width="150px"></div>
                    <div class="content text-center">
                        <div class="logo">
                        </div>
                        <div class="title-text">
                            <h3>Sign in to Your Account</h3>
                        </div>
                        <form action="proses/login.php" method="POST">
                            <!-- Username -->
                            <input class="form-control main" type="text" placeholder="Username" name="username_user" required>
                            <!-- Password -->
                            <input class="form-control main" type="password" placeholder="Password" name="password_user" required>
                            <!-- Submit Button -->
                            <button class="btn btn-main-sm">Sign in</button>
                        </form>
                        <div class="new-acount">
                            <a href="contact.html">Forgot your password?</a>
                            <p>Don't Have an account? <a href="register.php">SIGN UP</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

<?php 
	include 'footer.php';
?>
