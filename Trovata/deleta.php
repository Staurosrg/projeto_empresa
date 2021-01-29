<?php
	include_once ("conn.php");
	
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Deleta</title>
		<meta charset ="utf-8">
		<link href="formulario.css" rel="stylesheet" type="text/css">
		
	</head>
	<body>

			<?php
				
				session_start();

			
			
				$produto = $_GET['produto'];
				
		
				
			$sql= "DELETE produto from produto  where produto ='$produto'";
			
				echo $sql;
			
			$produto_deleta = mysqli_query($conn, $sql);
			
				if ($sql) {
				
				
				$message = " ERRO - Tem certeza que deseja deletar este $descricao_produto???";
				
				echo "<script type='text/javascript'>return confirm('$message');</script>";
				
		
				
				}	else ('Não Foi possível excluir: '.mysqli_error());
				
				
				
			
			?>
		

				<input type="button" value="Voltar" onClick="volta()">
					
					<script type="text/javascript">
				function volta()
				{
					location.href=" lista.php"
				}
			</script>
				
	</body>		
</html>

