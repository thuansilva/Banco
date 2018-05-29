<?php
	session_start();
    $obra = $_POST['obra'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $devolucao = ("SELECT  `idObras_FK` FROM `usuarios_emprestimo` WHERE `idObras_FK`='$obra'");
    $result = mysql_query($devolucao);

    if(mysql_num_rows($result) > 0){
        
        echo "Operacao realiada com sucesso";

        echo "<table border='1'";
        echo "<tr><td>Cod. Obra</td>"
             ."</tr>";

        while ($tbl = mysql_fetch_array($result)) {
            $idObra = $tbl["idObras_FK"];
            echo "<tr>";
            echo "<td>$idObra </td>";
            echo "</tr>";
        }
    }else{
        die('Error: '.mysql_error());
    }

#	header("location:/Banco/devolucao.php");
	?>