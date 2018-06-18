<?php
	session_start();
    $devolucao = $_POST['idEmprestimo'];


    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $devolucao = ("DELETE FROM `usuarios_emprestimo` WHERE `idEmprestimo`='$devolucao'");
    $result = mysql_query($devolucao);

    #header("location:/Banco/devolucao.php");
	?>