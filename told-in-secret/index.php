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
			<div class="tabla">
				<div class="fila">
					<div class="redondo" ><span id="1"></span></div>
					<div class="redondo" ><span id="2"></span></div>
					<div class="redondo" ><span id="3"></span></div>
				</div>
				
				<div class="fila">
					<div class="redondo" ><span id="4"></span></div>
					<div class="redondo" ><span id="5"></span></div>
					<div class="redondo" ><span id="6"></span></div>
				</div>
				
				<div class="fila">
					<div class="redondo" ><span id="7"></span></div>
					<div class="redondo" ><span id="8"></span></div>
					<div class="redondo" ><span id="9"></span></div>
				</div>
			</div>
			<button class="btn" id="btn" onclick="myFunction()">¡Unlock!</button>
		</div>
		
		
		<script>
			/*
			La solución va de la forma:
			1 	2 	3
			4	5	6
			7	8	9
			Simplemente hay que cambiar la variable solucion
			*/
			solucion= [1, 2, 4, 5, 3, 6, 8, 7, 9]
			contador= 0
			elements= []
			
			function myFunction() {
				
				//Hacemos reset
				if(contador == solucion.length){
					var boton = document.getElementById("btn")
					boton.textContent = "¡Unlock!"
					contador = 0;
					//Borramos las clases
					elements.forEach(function(element) {
						element.classList.remove("color")	
					});
					
				}else{
					var element = document.getElementById(solucion[contador])
					element.classList.add("color")	
					
					elements.push(element)
					
					if (contador== solucion.length-1){
						var boton = document.getElementById("btn")
						boton.textContent = "¡Reset!"

					}else if(contador==0){
						var boton = document.getElementById("btn")
						boton.textContent = "Next"
					}
					contador += 1
				}
				
				
				
			}
		</script>
		
		
		
		
	</body>

</html>
