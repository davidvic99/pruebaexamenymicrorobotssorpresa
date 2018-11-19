<?php
require('conn.php');

$usuario = $_POST['usuario'];
$password = sha1($_POST['password']);
$email=$_POST['email'];

$añadir = "INSERT INTO `users`(`usuario`, `password`, `email`) VALUES ('$usuario','$password','$email')";
    if(mysqli_query($conn,$añadir)){
            echo "<h1>Tu usaurio se ha registrado correctamete.</h1>";
            header("refresh:2;url=index.php");

    }else {
        echo "<h1>El usuario ya esta registrado</h1>";
    }




