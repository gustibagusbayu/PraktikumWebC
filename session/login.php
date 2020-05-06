<?php 

require 'function.php';
if( isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username'");

	if( mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if($password == $row["password"]) {

			$_SESSION["login"] = true;
			$_SESSION["username"] = $row["username"];
			$_SESSION["role"] = $row["role"];
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        body{
	font-family: sans-serif;
	background: #d5f0f3;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form-login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol-login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    <div class="kotak_login">
		<?php if(isset($error)) : ?>
			<p style="color: red;">username/password salah!</p>
		<?php endif; ?>
        <form action="" method="post">
            <label for="username"> Username
                <input type="text" name="username" id="username" class="form-login" placeholder="Masukkan username">
            </label>
            <label for="username"> Password
                <input type="password" name="password" id="password" class="form-login" placeholder="Masukkan password">
            </label>

            <input type="submit" name="login" class="tombol-login" value="LOGIN">

            <br>
            <br>
        </form>
    </div>
    
</body>
</html>