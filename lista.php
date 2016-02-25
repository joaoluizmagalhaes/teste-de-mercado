<?php

	$tb = 'joadef1_controle';
		
	require_once("conexao.php");
	$banco = mysql_select_db($tb, $conexao);

	if (!$banco) {

		$mensagem_erro = 'Falha na conexão com Banco de Dados: '. mysql_error();
		
	}

	$sql = "SELECT * from lista_mercadoria";

	$query = mysql_query($sql, $conexao);

	$num_linhas = mysql_num_rows($query);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Teste de Mercado - Valemobi</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="formulario">
			<nav class="navbar navbar-default">
			  	<div class="container-fluid">
				    <ul class="nav navbar-nav">
				      	<li><a href="teste-de-mercado.html">Formulário</a></li>
				      	<li class="active"><a href="lista.php">Lista</a></li>
				    </ul>
				</div>
			</nav>					
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Código da Mercadoria</th>
					<th>Tipo da Mercadoria</th>
					<th>Nome da Mercadoria</th>
					<th>Quantidade</th>
					<th>Preço</th>
					<th>Tipo de Negócio</th>
				</tr>
				<?php if ($num_linhas > 0){
					while($resultado = mysql_fetch_assoc($query)){ ?> 
				
						<tr>
							<td><?php echo $resultado['id']; ?></td>
							<td><?php echo $resultado['codigo_mercadoria']; ?></td>
							<td><?php echo $resultado['tipo_mercadoria']; ?></td>
							<td><?php echo $resultado['nome_mercadoria']; ?></td>
							<td><?php echo $resultado['quantidade']; ?></td>
							<td>R$ <?php echo number_format($resultado['preco'],2,",","."); ?></td>
							<td><?php echo $resultado['tipo_negocio']; ?></td>
						</tr>

					<?php } ?>

				<?php } else { ?>

					<tr>
						<td colspan="2"><center>Não existem resultados</center></td>
					</tr>

				<?php } ?>

			</table>	
 		</div>
	</body>
</html>

