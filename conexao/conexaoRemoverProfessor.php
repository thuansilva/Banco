<?php

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "sigb";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);

	$id = $_POST['id_Professor'];

#	$remProf =	("DELETE FROM `usuarios` INNER JOIN `professores` ON `usuarios`.`idUsuario` = `professores`.`idUsuario_FK` INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK` INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK` WHERE `idUsuario` = '$id'");

#	$remProf2 = ("DELETE FROM `telefoneusuario` INNER JOIN `enderecousuario` ON `telefoneusuario`.`idUsuario_FK` = `enderecousuario`.`idUsuario_FK` INNER JOIN `professores` ON `enderecousuario`.`idUsuario_FK` = `professores`.`idUsuario_FK` INNER JOIN `usuarios` ON `professores`.`idUsuario_FK` = `usuarios`.`idUsuario` WHERE `telefoneusuario`.`idUsuario_FK` = '$id'");


	$remProf = ("DELETE FROM `telefoneusuario` WHERE `idUsuario_FK`='$id'");
	$remProf1 =	("DELETE FROM `enderecousuario` WHERE `idUsuario_FK`='$id");
	$remProf2 =	("DELETE FROM `professores` WHERE `idUsuario_FK` = '$id'");
	$remProf3 =	("DELETE FROM `usuarios`WHERE `idUsuario` = '$id'");

	$result_up = $conn->query($remProf, $remProf1, $remProf2, $remProf3);

	#echo "<script>alert('Exclusão efetuada com sucesso!');
   #    location.href=\"/Banco/pesquisarProfessor.php\"</script>";
	#location.href=\"/Banco/conexaophp\"</script>";
?>