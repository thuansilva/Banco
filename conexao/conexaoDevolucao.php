<?php
	session_start();
    $devolucao = $_GET['idEmprestimo'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $devolucao = ("DELETE FROM `usuarios_emprestimo` WHERE `idEmprestimo`='$devolucao'");
    $result = mysql_query($devolucao);

    if( $devolucao == ''){
        echo "<script>alert('Houve um erro ao fazer devolucao!');
        location.href=\"/Banco/devolucao.php\"</script>";
    }else{
        echo "<script>alert('Devolucao realizada com sucesso!');
        location.href=\"/Banco/devolucao.php\"</script>";
    }

	#header("location:/Banco/devolucao.php");
	?>