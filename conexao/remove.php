<?php 
    //recebe o id dos dados que serão apagados
    $id = filter_input(INPUT_POST, 'idUsuario');

    //estabelece a conexão
    $conexao = mysqli_connect('localhost','root','','');
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }
    //Executa a query
    $sql = "DELETE FROM `usuarios`
    INNER JOIN `telefoneusuario` ON `usuarios`.`idUsuario` = `telefoneusuario`.`idUsuario_FK`
    INNER JOIN `alunos` ON `usuarios`.`idUsuario` = `alunos`.`idUsuario_FK`
    INNER JOIN `enderecousuario` ON `usuarios`.`idUsuario` = `enderecousuario`.`idUsuario_FK` WHERE `usuarios`.`idUsuario`= '$id'" ;
    $remove = mysqli_query($conexao, $sql);
    //Se falhou, redireciona pra exibe.php com remove igual a false 
    if( !$remove ){
        header("Location:/Banco/conexao/pesquisarAluno.php");
        exit;
    }
    //se tudo deu certo, redireciona pra exibe.php com remove igual a true
    header("Location:/Banco/conexao/pesquisarAluno.php");
?>