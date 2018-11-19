<!DOCTYPE html>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/ayax.css"/>

<?php
require('conn.php');
include("session.php");
$usuario=$_SESSION["username"]
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('juego').innerHTML = req.responseText;
				}
			}

			req.open('POST', 'jugadasayax.php', true);
			req.send();
		}

		setInterval(function(){ajax();}, 1000);
	</script>
</head>
<body>
        <script src="js/main.js"></script>
        <div id="mover">
    <form action="reiniciar.php">
            <input type="submit" value="Reiniciar Partida" >
    </form>
    </div>
    <br>
    <br>
<div id="haganjuego">
<form action="juego.php?mov=1" method="POST" name="realizarjugada">
<input type= "number" name="fila" placeholder ="fila" required/>
<input type= "number" name="columna" placeholder ="columna" required/>
<br>
<input name="submit" type="submit" value="Jugar!" />
<br>

</form>
</div>
   
    <?php 
    
    if (isset($_GET['mov']) && $_GET['mov'] == 1) {

        $fila = $_POST['fila'];
        $columna = $_POST['columna'];
       
        if ((0>=$fila)||($fila>6)||(0>=$columna)||($columna>6)){
            echo "<h1>Error en la fila o columna.</h1>";
        }else{
            $insert = "INSERT INTO `jugadas` (`usuario`, `jugada`) VALUES(\"$usuario\",\"realizo el siguiente movimiento $fila , $columna\")";
            if(mysqli_query($conn,$insert)){
                header("refresh:0;url=juego.php");

            }
        
    }
    
    }
    ?>
    <br><br><br><br><br><br><br><br><br>
    <div id="mover2">
     <?php
    
    echo "<h1>Historial de jugadas ONLINE</h1>";

    ?>
    
</div>
   </div>
   <hr class=usuario>
   <br> 
   <div id ="contenedor">
   <br>
<div id ="jugadas">
<br>
<div id="juego">

<br>
</div>
</div>
</div>
</body>


</html>