<?php
require('conn.php');
include("session.php");
$usuario=$_SESSION["username"];
$sql = "DELETE FROM `jugadas` WHERE `usuario` = '$usuario' ";
if(mysqli_query($conn,$sql)){
    header("refresh:0;url=juego.php");
}else{
    echo "error";
}



?>