<?php
	include_once ("conn.php");
	
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Edita</title>
		<meta charset ="utf-8">
		
		
	</head>
	<body>

			<?php
			$produto = $_POST ['produto'];
			$descricao_produto = $_POST ['descricao_produto'];
			$apelido_produto  = $_POST ['apelido_produto'];
			$grupo_produto      = $_POST ['grupo_produto'];
			$subgrupo_produto = $_POST ['subgrupo_produto'];
			$situacao      = $_POST ['situacao'];
			$peso_liquido    = $_POST ['peso_liquido'];
			$classificacao_fiscal = $_POST ['classificacao_fiscal'];
			$codigo_barras = $_POST ['codigo_barras'];
			$colecao = $_POST ['colecao'];


				$result = "UPDATE produto set produto='$produto',descricao_produto ='$descricao_produto',apelido_produto='$apelido_produto',grupo_produto='$grupo_produto',subgrupo_produto='$subgrupo_produto' ,situacao='$situacao',peso_liquido='$peso_liquido', classificacao_fiscal='$classificacao_fiscal', codigo_barras='$codigo_barras' ,colecao='$colecao' where produto ='$produto'";
				
			echo $result;
				$sql=  mysqli_query($conn,$result);
				
				
				
				if (!$sql)
			die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error($conn));
				
				
				
				if ($sql)
		
		$message = " $descricao_produto - Editado com sucesso!!!";
				
				echo "<script type='text/javascript'>alert('$message');</script>";
	
						
				
			?>
			
				<script type="text/javascript">
				function Voltar()
				{
					location.href=" LISTA.PHP"
				}
			</script>
			<input type="button" value="VOLTAR" onClick="Voltar()">
					
		

	</body>		
</html>
