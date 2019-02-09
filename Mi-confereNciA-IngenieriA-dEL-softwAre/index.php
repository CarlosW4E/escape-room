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
			unset($_SESSION['keyScape']);
			if(isset($_POST['password']) && trim(strtolower($_POST['password']))=="alemania"){ //Solo habría que cambiar "alemania"
				$_SESSION['keyScape'] = 'ok';
				header('Location: ../binario/index.php');
			}else if(isset($_POST['password'])){
				$error= true;
			}
		
		?>
		
	
		<!-- Frío, Frío... -->
		<div class="container">
			<img src="../img/conferencia.jpg" alt="conferencia"/>
			<p>Esta conferencia fue en _ _ _ _ _ _ _ _</p>
			
			<div class="sub-container">
				<form action="index.php" method="POST">
					<input class="input-text" type="password" name="password"/>
					<br>
					<input class="input-submit btn" type="submit" value="Comprobar"/>
				</form>
			
				<br>
				<?php if(isset($error)){ ?>
						<img class="error" src="../img/error.png" alt="error"/>
				<?php
						unset($error);
						unset($_POST['password']);
					}
				?>
			</div>
		</div>
		
		
		
	</body>

</html>
