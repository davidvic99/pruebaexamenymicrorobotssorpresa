<?php


require('conn.php');




?>

<head>
<link rel="stylesheet" href="css/registro.css">
</head>
<body>
<form action="registrorecibir.php" method="POST">
    <h1><b>Registrarse</b></h1>
    <input type="text" name="usuario" placeholder="Usuario" required/>
    <br>
    <br>
    <input type="password" name="password" placeholder="Contraseña" required/>
    <br>
    <br>
    <input type="email" name="email" placeholder="Email" required/>
    <br>
    <input type="submit" value="Registrarse" required/>
    <br>
    <h2><p>Ya tienes cuenta? <a href='login.php'>Login</a></p></h2>





</form></body>