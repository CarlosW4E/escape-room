<!DOCTYPE html>
<html>
	<head>
		<title>Software Room</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="icon" type="image/ico" href="../img/escaperoom.ico">
	
	</head>
	
	<body>
		
		
		<?php 
			session_start();
			
			if(!isset($_SESSION['keyScape'])){
				header('Location: ../Mi-confereNciA-IngenieriA-dEL-softwAre/index.php');
			}
		
		?>
		
		<!-- Frío, Frío... -->
		<div class="container">
			<img src="../img/fondobinario.png" alt="conferencia"/>
			<p>Para pasar de decimal a binario, dividimos entre 2 y nos quedamos con el resto: </p>
			<div class="sub-container">
				<img src="../img/binario2.png"/>
			</div>
			<p>El número en binario se forma con los restos en sentido contrario. En este caso: 10 = 1010</p>
			
		</div>
		
		
		
	</body>

</html>
