<?php
	$conexao = mysql_connect('localhost','joadef1_controle','dukejlf159753');

	if (!$conexao) {
	   $mensagem_erro= 'Falhas de na conexão com o MySQL: ' . mysql_error();
	   $destino = $_SESSION['raizurl'].'erro.php?msg='.$mensagem_erro;
	   header("Location: $destino");
	   exit;
	}
?>
