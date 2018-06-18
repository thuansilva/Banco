<?php
	session_start();
	$nome = $_POST['obra'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $pesquisa = "SELECT `usuarios_emprestimo`.`idEmprestimo`, `usuarios_emprestimo`.`idBibliotecaria_FK`, `usuarios`.`nomeUsuarios`, `obras`.`nomeObras`, `usuarios_emprestimo`.`dataDevolucao`, `usuarios_emprestimo`.`dataEmprestimo` 
    FROM `usuarios_emprestimo` 
    INNER JOIN `usuarios` ON `usuarios`.`idUsuario` = `usuarios_emprestimo`.`idUsuario_FK`
    INNER JOIN `obras` ON `obras`.`idObras` = `usuarios_emprestimo`.`idObras_FK`
    WHERE `obras`.`nomeObras` LIKE '%$nome%'";

    $result = mysql_query($pesquisa);

    if(mysql_num_rows($result) > 0){
        
        echo "Operacao realizada com sucesso";

        echo "<table border='1'";
        echo "<tr><td>Cod. Empr.</td>"
             ."<td>Nome Obra</td>"
             ."<td>Nome Usúario</td>"
             ."<td>Data de Empréstimo</td>"
             ."<td>Data de Devolução</td>"
             ."</tr>";

        while ($tbl = mysql_fetch_array($result)) {
            $idEmprestimo = $tbl["idEmprestimo"];
            $nomeObra = $tbl["nomeObras"];
            $nomeUsuario = $tbl["nomeUsuarios"];
            $dataEmprestimo = $tbl["dataEmprestimo"];
            $dataDevolucao = $tbl["dataDevolucao"];
            echo "<tr>";
            echo "<td>$idEmprestimo </td>";
            echo "<td>$nomeObra </td>";
            echo "<td>$nomeUsuario </td>";
            echo "<td>$dataEmprestimo </td>";
            echo "<td>$dataDevolucao </td>";
            echo "</tr>";
        }
    }else{
        die('Error: '.mysql_error());
    }
    
	#header("location:/Banco/devolucao.php");
	?>