<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "trovata";
	
	// criando a conexão
	
	$conn = mysqli_connect ($servidor, $usuario, $senha, $dbname);
	
	if (!$conn){
		die ("Falha na conexao: ". mysqli_connect_error());
	} else {
	//echo "conexao Realizada com Sucesso";
		
	}
?>