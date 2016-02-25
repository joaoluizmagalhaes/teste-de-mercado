<!doctype html>
<html lang="pt">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
	<?php
		
		
		$tb = 'joadef1_controle';
		
		require_once("conexao.php");
		$banco = mysql_select_db($tb, $conexao);

		if (!$banco) {

			$mensagem_erro = 'Falha na conexão com Banco de Dados: '. mysql_error();
			
		}

		if(isset($_POST['codigo_mercadoria'])){

			$codigo_mercadoria = $_POST['codigo_mercadoria'];
			$tipo_mercadoria = $_POST['tipo_mercadoria'];
			$nome_mercadoria = $_POST['nome_mercadoria'];
			$quantidade = $_POST['quantidade'];
			$preco = $_POST['preco'];
			$tipo_negocio = $_POST['tipo_negocio'];


			$sql = "INSERT INTO lista_mercadoria (codigo_mercadoria,
												  tipo_mercadoria,
												  nome_mercadoria,
												  quantidade,
												  preco,
												  tipo_negocio
												  ) VALUES (
												  	'$codigo_mercadoria',
													'$tipo_mercadoria',
													'$nome_mercadoria',
													'$quantidade',
													'$preco',
													'$tipo_negocio')";

			mysql_query($sql,$conexao) or die(mysql_error());

			echo "<script language='JavaScript'> window.alert('Transação Cadastrado com Sucesso!'); </script>";

		}
	?>

	</body>
</html>

<script language= "JavaScript">
	location.href="lista.php"
</script>