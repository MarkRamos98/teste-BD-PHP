<?php 

	$server = 'localhost';
	$user = 'Roblox';
	$pass = 'QWERTYUIOP';
	$database = 'lambisgoia';

	$con = mysqli_connect($server,$user,$pass,$database);

	if (mysqli_connect_error()) {
		
		echo "Erro ao conectar o banco de dados".mysqli_connect_error();

	} else{

		echo "Banco de dados conectado";
		mysqli_close($con);

	}

 ?>