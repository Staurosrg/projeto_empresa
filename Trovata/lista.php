<?php
	include_once ("conn.php");
	include_once ("empresa.php");
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Lista</title>
		<meta charset ="utf-8">
		
	</head>
	<body>
		<script type="text/javascript">
			function Nova()
			{
				location.href=" produto_formulario.PHP"
			}
		</script>
		
		
		<input type="button" value="NOVO PRODUTO" onClick="Nova()"><br><br>
		
	
	
				
				
			
				
				<?php $valor = $_POST['select_empresa_nome']; ?>
				<input type="submit" value="CONFIRMAR">
				
			</select><br><br>
			
			<table width="100%" cellpadding="5" cellspacing="0" border="1" align="center" class="interna" > 
				<tr>
					
					<td>PRODUTO</td>                      
					<td>APELIDO</td>             
					<td>GRUPO</td>               
					<td>SUBGRUPO</td>           
					<td>SITUAÇÃO</td>                    
					<td>PESO</td>               
					<td>CLASSIFICACAO FISCAL</td>          
					<td>CÓDIGO DE BARRAS</td>                
					<td>COLEÇÃO</td>                      
				</tr> 
				
				
				<?php
					session_start();
					
					$valor =  $_POST['select_empresa_nome'] ;
					
				?> 
				<div name="trovata"> Bem Vindo! </div><!--Bem Vindo-->
				<?php
					echo  $valor;
					$result_produto = "SELECT * FROM produto WHERE empresa ='$valor'";
					$sql = mysqli_query ($conn, $result_produto);
					
					if (!$sql)
					die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error($conn));
					
					
					
					While ($dado = mysqli_fetch_assoc ($sql )) 
					
			
					{?>
					
				
					
					
					<tr>
						
						<td><?php echo $dado ['PRODUTO']; ?></td>                      
						<td><?php echo $dado ['DESCRICAO_PRODUTO']; ?> </td>           
						<td><?php echo $dado ['APELIDO_PRODUTO']; ?> </td>             
						<td><?php echo $dado ['GRUPO_PRODUTO']; ?> </td>               
						<td><?php echo $dado ['SUBGRUPO_PRODUTO']; ?></td>           
						<td><?php echo $dado ['SITUACAO']; ?> </td>                          
						<td><?php echo $dado ['PESO_LIQUIDO']; ?> </td>                    
						<td><?php echo $dado ['CLASSIFICACAO_FISCAL']; ?></td>          
						<td><?php echo $dado ['CODIGO_BARRAS']; ?></td>                
						<td><?php echo $dado ['COLECAO']; ?></td>
					
						<td> <?php echo '<a href="edita.php?produto='.$dado['PRODUTO'].'" ><img src ="editar.png"/></a>|';?></td> 
						<td> <?php echo '<a href="deleta.php?produto='.$dado['PRODUTO'].'"><img src ="excluir.png"/></a>';?></td> 
						
					</td> 
				</tr> 
				
				
				
			<?php }?> 
		</table>
		

	
</body>	

</html>

