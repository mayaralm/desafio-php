<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "desafio";
	
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $database);
	mysqli_set_charset($conn, "utf8");
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}
	

	
?>