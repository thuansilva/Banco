<?php
    session_start();
    $nome = $_POST['nomeUsuario'];

    $conexao = mysql_connect('localhost', 'root', '') or die (mysql_error());
    $select = mysql_select_db('sigb') or die (mysql_error());
    
    $pesquisa = ("SELECT `usuarios`.`idUsuario`, `usuarios`.`nomeUsuarios`, `telefoneUsuario`.`telefone`
    FROM `usuarios`
    INNER JOIN `alunos` ON `usuarios`.`idUsuario` = `alunos`.`idUsuario_FK`
    INNER JOIN `professores` ON `usuarios`.`idUsuario` = `professores`.`idUsuario_FK`
    INNER JOIN `telefoneUsuario` ON `usuarios`.`idUsuario` = `telefoneUsuario`.`idUsuario_FK`
    WHERE `usuarios`.`nome` LIKE  '%$nome%'");
    $result = mysql_query($pesquisa);

    if(mysql_num_rows($result) > 0){
        
        echo "Operacao realizada com sucesso";

        echo "<table border='1'";
        echo "<tr><td>ID</td>"
             ."<td>Nome</td>"
             ."<td>Telefne</td>"
             ."</tr>";

        while ($tbl = mysql_fetch_array($result)) {
            $idUsuario = $tbl["idUsuario"];
            $nomeUsuario = $tbl["nomeUsuarios"];
            $telefone = $tbl["telefone"];
            echo "<tr>";
            echo "<td>$idUsuario </td>";
            echo "<td>$nomeUsuario </td>";
            echo "<td>$telefone </td>";
            echo "</tr>";
        }
    }else{
        die('Error: '.mysql_error());
    }
    
    #header("location:/Banco/pesquisarAlunos.php");
?>