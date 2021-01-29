<?php
	include_once ("conn.php");
	
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Cadastro</title>
		<meta charset ="utf-8">
		<link href="formulario.css" rel="stylesheet" type="text/css">
		
	</head>
	<body>
		<div>
			
			
			<form method="POST" action="adiciona_produto.php"><br>
				<fieldset>
					<legend><h3>NOVO PRODUTO </h3></legend>
					
					<label class="produto">	<b>Empresa: </b></label>
					<select name="empresa">
						<option value='1'>1</option>
						<option value='2'>2</option>
					</select><br>
					<label class="produto"> <b>Código Produto: </b></label> 
					<input type="text" name="prod" placeholder="CÓDIGO DO PRODUTO" /><br/>
					
					<label class="produto">	<b>Descrição do Produto: </b> 
					</label><input type="text" name="desc_prod" placeholder="DESCRIÇÃO DO PRODUTO" /><br/>
					
					<label class="produto"><b>Apelido do Produto:</b> </label>
					<input type="text" name="apl_prod" size="22" placeholder="APELIDO DO PRODUTO"/><br/>
					
					<label class="produto"><b>	Grupo Produto: </b></label>	
					<select name="grupo_produto">
						<option> Grupo do Produto  </option>
						<?php
							$result_produto =  "SELECT * FROM grupo_produto ORDER BY DESCRICAO_GRUPO_PRODUTO";
							$resultado_produto = mysqli_query($conn, $result_produto);
							WHILE ($row_produto = mysqli_fetch_assoc($resultado_produto)){?>
							<option value ="<?php echo $row_produto['EMPRESA'];?>"><?php echo $row_produto['DESCRICAO_GRUPO_PRODUTO'];?>
								</option> <?php
							}
						?>
					</select><br>
				</p>	
				<label class="produto">	SubGrupo Produto: </label>	<input type="text" name="sub_prod" placeholder="0"size="1"/><br/>
				<label class="produto">	Situação:  </label>
				<select type="text" name="situacao">
					<option value="a">A </option>
					<option value="i">I</option>
					<option value="c">C</option>
				</select><br/>
				<label class="produto">	Peso Liquido:  </label><input type="text" name="peso"  /><br/>
				<label class="produto">	Classificação Fiscal: </label> <input type="text" name="classificacao" /><br/>
				<label class="produto">	Código de Barras: </label> <input type="text" name="cod" /><br/>
				<label class="produto">	Coleção: </label> <input type="text" name="colecao" /><br/>
			<input type="submit" value="Cadastrar" /><input type="reset" value="Cancelar" name=""><input type="button" value="Voltar" onClick="volta()"></p>
			
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


