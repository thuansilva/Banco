<?php
	session_start();
	$nome = $_POST['obra'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $pesquisa = ("SELECT `obras`.`idObras`, `obras`.`nomeObras`, `obras`.`dataCadastro`
    FROM `obras`
    WHERE `obras`.`nomeObras` LIKE  '%$nome%'");
    $result = mysql_query($pesquisa);

    if(mysql_num_rows($result) > 0){
        
        echo "Operacao realiada com sucesso";

        echo "<table border='1'";
        echo "<tr><td>ID</td>"
             ."<td>Nome</td>"
             ."<td>Data de Cadastro</td>"
             ."</tr>";

        while ($tbl = mysql_fetch_array($result)) {
            $idObra = $tbl["idObras"];
            $nomeObra = $tbl["nomeObras"];
            $dataCadastro = $tbl["dataCadastro"];
            echo "<tr>";
            echo "<td>$idObra </td>";
            echo "<td>$nomeObra </td>";
            echo "<td>$dataCadastro </td>";
            echo "</tr>";
        }
    }else{
        die('Error: '.mysql_error());
    }
    
	#header("location:/Banco/pesquisarAlunos.php");
	?>