<?php
	include_once ('conn.php');
?>
<!DOCTYPE hmtl>
<html>
	<head>
		<title>Empresa</title>
		<meta charset ="utf-8">
		
	</head>
	<body>
		<form method = POST action = "lista.php">
			<select name="select_empresa_nome">
				<option> SELECIONE A EMPRESA </option>
				<?php
					
					
					session_start();
					
					$sql = mysqli_query($conn, "SELECT * from empresa ");
					WHILE ($row_empresa = mysqli_fetch_assoc($sql)){?>
					<option value ="<?php echo $row_empresa['EMPRESA'];?>"><?php echo $row_empresa['RAZAO_SOCIAL'];?>
						</option> <?php
					}
					if (!$sql)
					die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error($conn));
				?>
				
				<?php $valor = $_POST['select_empresa_nome']; ?>
				<input type="submit" value="CONFIRMAR">
			
			</select><br><br>
			
			
		</body>	
		
	</html>		