<?php
	session_start();
	$nome = $_POST['professor'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $pesquisa = ("SELECT `usuarios`.`idUsuario`, `usuarios`.`nomeUsuarios`, `professores`.`email`
    FROM `usuarios`
    INNER JOIN `professores` ON `usuarios`.`idUsuario` = `professores`.`idUsuario_FK`
    WHERE `usuarios`.`nomeUsuarios` LIKE  '%$nome%'");
    $result = mysql_query($pesquisa);

    if(mysql_num_rows($result) > 0){
        
        echo "Operacao realiada com sucesso";

        echo "<table border='1'";
        echo "<tr><td>ID</td>"
             ."<td>Nome</td>"
             ."<td>Email</td>"
             ."</tr>";

        while ($tbl = mysql_fetch_array($result)) {
            $idUsuario = $tbl["idUsuario"];
            $nomeUsuario = $tbl["nomeUsuarios"];
            $email = $tbl["email"];
            echo "<TR>";
            echo "<TD>$idUsuario </TD>";
            echo "<TD>$nomeUsuario </TD>";
            echo "<TD>$email </TD>";
            echo "</TR>";
        }
        
    }else{
        die('Error: '.mysql_error());
    }
    
	#header("location:/Banco/pesquisarAlunos.php");
	?>