<?php
	session_start();
    $obra = $_GET['idObras_FK'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $devolucao = ("DELETE FROM `usuarios_emprestimo` WHERE `idObras_FK`='$obra'");
    $result = mysql_query($devolucao);

	header("location:/Banco/devolucao.php");
	?>