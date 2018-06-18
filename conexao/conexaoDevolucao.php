<?php
	#session_start();
	#$devol = $_GET['idEmprestimo'];

	#$conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    #$select = mysql_select_db('sigb') or die (mysql_error());
    
    #$devolucao = ("DELETE FROM `usuarios_emprestimo` WHERE `idEmprestimo`='$devol'");
    #$result = mysql_query($devolucao);

    #header("location:/Banco/devolucao.php");

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);

	$id = $_POST['id_Emprestimo'];
	$devolucao = ("DELETE FROM `usuarios_emprestimo` WHERE `idEmprestimo`='$id'");
	$result_up = $conn->query($devolucao);

	echo "<script>alert('Devolucao efetuada com sucesso!');
       location.href=\"/Banco/devolucao.php\"</script>";
	//header("location:/Banco/devolucao.php");
	?>