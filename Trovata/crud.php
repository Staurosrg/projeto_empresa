<?php
	include_once ("conn.php");
	include_once ("empresa.php");
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Crud</title>
		<meta charset ="utf-8">
		</head>
	<body>
		<?PHP
				session_start();
		$pagina_atual = filter_input (INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
		$pagina =  (!empty($pagina_atual)) ? $pagina_atual : 1;
		$qnt_result_pg = 20;
		
		$result_produto = "SELECT * FROM produto";
		$resultado_produto  = mysqli_query($conn, $result_produto);
		while ($row_produto = mysqli_fetch_array($resultado_produto)) {
			
			echo "DESCRICAO_PRODUTO" . $row_produto['DESCRICAO_PRODUTO']."<br>";
			echo "APELIDO_PRODUTO" . $row_produto['APELIDO_PRODUTO']."<br>";
			echo "GRUPO_PRODUTO" . $row_produto['GRUPO_PRODUTO']."<br><hr>";
			
	
	echo $_SESSION['EMPRESA'] . '<br />';
			
		}
		?>
	</body>	

</html>

<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>