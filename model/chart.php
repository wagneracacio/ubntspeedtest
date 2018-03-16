<!DOCTYPE html>
<html class="no-js" lang="">
	<head>
		<meta charset="UTF-8">
		<title>Teste de Velocidade Ubiquiti</title>
		<link rel="stylesheet" type="text/css" href="../css/bar.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	</head>
	<body>
		<div>
			<h3></h3>
		</div>
		
		<div class="op1" >
			<center><h3>Velocidade Cliente</h3></center>
			<canvas id="speedChart"></canvas>
		</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
		<script src="../js/main.js"></script>
		<script>
			window.onload = addData;
			function addData() 
			{
				<?php 
					$comand->execute();
				?>  
				speedChart.update();
			}
		</script>
	</body>
</html>
