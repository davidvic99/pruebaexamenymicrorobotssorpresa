
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/registro.css">
</head>
<body>
<?php
require('conn.php');
session_start();

if (isset($_POST['username'])){

	$username = stripslashes($_REQUEST['username']); //Borra barras de lado
      
	$username = mysqli_real_escape_string($conn,$username); //Caracteres especiales en un string
	$password = sha1($_REQUEST['password']);

	$password = mysqli_real_escape_string($conn,$password);
	
    $query = "SELECT * FROM `users` WHERE usuario='$username' and password='$password'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: juego.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">

<form action="" method="post" name="login">
<h1>Iniciar sesion</h1>
<input type="text" name="username" placeholder="Usuario" required /><br>
<input type="password" name="password" placeholder="Contraseña" required /><br>
<input name="submit" type="submit" value="Iniciar" />
</form>
<h2><p>Aun sin cuenta? <a href='registro.php'>Registrate.</a></p></h2>
</div>
<?php } ?>
</body>
</html>