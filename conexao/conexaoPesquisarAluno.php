<?php
	session_start();
	$nome = $_POST['aluno'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $pesquisa = ("SELECT `usuarios`.`idUsuario`, `usuarios`.`nome`, `serie`.`nomeSerie`, `turma`.`nomeTurma`
    FROM `usuarios`
    INNER JOIN `alunos` ON `usuarios`.`idUsuario` = `alunos`.`idUsuario_FK`
    INNER JOIN `serie` ON `alunos`.`idSerie_FK` = `serie`.`idSerie`
    INNER JOIN `turma` ON `alunos`.`idTurma_FK` = `turma`.`idTurma`
    WHERE `usuarios`.`nome` LIKE  '%$nome%'");
    $result = mysql_query($pesquisa);

    if(mysql_num_rows($result) > 0){
        
        echo "Operacao realiada com sucesso";

        echo "<table border='1'";
        echo "<tr><td>ID</td>"
             ."<td>Nome</td>"
             ."<td>Serie</td>"
             ."<td>Turma</td>"
             ."</tr>";

        while ($tbl = mysql_fetch_array($result)) {
            $idUsuario = $tbl["idUsuario"];
            $nomeUsuario = $tbl["nome"];
            $serie = $tbl["nomeSerie"];
            $turma = $tbl["nomeTurma"];
            echo "<TR>";
            echo "<TD>$idUsuario </TD>";
            echo "<TD>$nomeUsuario </TD>";
            echo "<TD>$serie </TD>";
            echo "<TD>$turma </TD>";
            echo "</TR>";
        }
    }else{
        die('Error: '.mysql_error());
    }
    
	#header("location:/Banco/pesquisarAlunos.php");
	?>