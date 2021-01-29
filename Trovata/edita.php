<?php
	include_once ("conn.php");
	
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Edita</title>
		<meta charset ="utf-8">
		<link href="formulario.css" rel="stylesheet" type="text/css">
		
	</head>
	<body>
		
		<?php
			
			session_start();
			
			
			
			$produto = $_GET['produto'];
			
			echo $produto;
			$result_produto = "select produto, descricao_produto, apelido_produto, grupo_produto,subgrupo_produto, situacao, peso_liquido, classificacao_fiscal, codigo_barras, colecao from produto where produto ='$produto'";
			$sql = mysqli_query ($conn, $result_produto);
			
			
			$dado = mysqli_fetch_assoc ($sql);
			if (!$sql)
			die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error($conn));
			
		?>
		
		
		<div>
			<form action ="update.php" method="POST">
				
				<fieldset>
					<legend> Editar Produto </legend>
					<br>PRODUTO: <input name="produto" type="text" value="	<?php echo $dado['produto']; ?>"/>                    
					
					<br>DESCRICAO PRODUTO: <input name="descricao_produto" type="text" value="<?php echo $dado['descricao_produto']; ?>"/>                
					<br>APELIDO PRODUTO: <input name="apelido_produto" type="text" value="<?php echo $dado['apelido_produto']; ?>"/>                  
					<br>GRUPO_PRODUTO: <input name="grupo_produto" type="text" value="<?php echo $dado['grupo_produto']; ?>"/>                    
					<br>SUBGRUPO_PRODUTO: <input name="subgrupo_produto" type="text" value="<?php echo $dado['subgrupo_produto']; ?>"/>                
					<br>SITUACAO: <input name="situacao" type="text" value="<?php echo $dado['situacao']; ?>"/>                             
					<br>PESO_LIQUIDO: <input name="peso_liquido" type="text" value="<?php echo $dado['peso_liquido']; ?>"/>                        
					<br>CLASSIFICACAO_FISCAL: <input name="classificacao_fiscal" type="text" value="<?php echo $dado['classificacao_fiscal']; ?>"/>             
					<br>CODIGO_BARRAS: <input name="codigo_barras" type="text" value="<?php echo $dado['codigo_barras']; ?>"/>                     
					<br>COLECAO: <input name="colecao" type="text" value="<?php echo $dado['colecao']; ?>"/>            	
					<br><input type="submit" value="Salvar"/>
					<input type="button" value="Voltar" onClick="volta()">
					
					<script type="text/javascript">
						function volta()
						{
							location.href=" lista.php"
						}
					</script>
					
				</fieldset>
			</form>
		</div>
	</body>		
</html>

