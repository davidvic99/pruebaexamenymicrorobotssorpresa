<?php
include("conn.php");
include("session.php");
$consulta = "SELECT * FROM jugadas ORDER BY id DESC";
$ejecutar = $conn->query($consulta);
while ($fila = $ejecutar->fetch_array()) :

?>
	<div id="datos-chat">
		<span style="color: #1C62C4;"><?php echo $fila['usuario']; ?></span>
		<span style="color: #848484;"><?php echo $fila['jugada']; ?></span>
	
	</div>
    	<?php endwhile; ?>
