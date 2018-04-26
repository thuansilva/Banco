<?php

	$nome =  $_POST['nomeLogin'];
	$senha = $_POST['senha'];
	$conexao = mysql_connect("localhost","root","") or die (mysql_error());
	$select = mysql_select_db("sigb") or die (mysql_error());
	$consulta = mysql_query("SELECT * FROM `bibliotecaria` WHERE `nomeLogin`='$nome' AND `senha`='$senha'");
	
	if (mysql_num_rows ($consulta) > 0 ) {
		$_SESSION['nomeLogin'] = $nome;
		$_SESSION['senha'] = $senha;
	header('location:/Banco/home.php');
	} else{
		unset($_SESSION['nomeLogin']);
		unset($_SESSION['senha']);
	header('location:/Banco/index.php');
}
?>



