<?php
	include_once ("conn.php");
	include_once ("empresa.php");
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Cadastro</title>
		<meta charset ="utf-8">
	</head>
	<body>
		
		<?php
			$empresa = $_POST ["empresa"];	
			$prod = $_POST ["prod"];
			$desc_prod = $_POST["desc_prod"];
			$apl_prod = $_POST["apl_prod"];
			$grupo_produto = $_POST["grupo_produto"];
			$sub_prod = $_POST["sub_prod"];
			$situacao = $_POST["situacao"];
			$peso = $_POST["peso"];
			$classificacao = $_POST["classificacao"];
			$cod = $_POST["cod"];
			$colecao = $_POST["colecao"];
			
			
			$sql = "INSERT INTO produto (empresa, produto, descricao_produto, apelido_produto, grupo_produto, subgrupo_produto, situacao, peso_liquido, classificacao_fiscal, codigo_barras, colecao) 
			values ({$empresa},'{$prod}','{$desc_prod}','{$apl_prod}', {$grupo_produto} , {$sub_prod} ,'{$situacao}',{$peso} ,
			'{$classificacao}', '{$cod} ',' {$colecao}')";
			echo $sql;exit;
			
			$resultado_produto  = mysqli_query($conn, $sql);
			if (!$resultado_produto)
			die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error($conn));
			
			if($resultado_produto) {
				
				
				$message = " $prod  $desc_prod- adicionado com sucesso!!!";
				
				echo "<script type='text/javascript'>alert('$message');</script>";
			?>
			
			<?php
				} else {
				$message = " ERRO - O produto $desc_prod  não foi adicionado!!!";
				
				echo "<script type='text/javascript'>alert('$message');</script>";
				
			?>
			
			<?php
			}
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