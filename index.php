<!doctype html>
<html ="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../Banco/img/favicon.ico">
    <title>Login</title>
    <!--  Bootstrap  -->
    <link href="../Banco/css/bootstrap.min.css" rel="stylesheet">
    <!-- Customisação-->
    <link href="../Banco/css/floating-labels.css" rel="stylesheet">
  </head>
  <body> 
    <div class="login-box ">
        
        <form class="signin" method="POST" action="/Banco/conexao/conexaoLogin.php">
        <div   class="text-center mb-4">
            <img class="mb-4" src="" alt="" width="72" height="72">
            <h1  class="h3 mb-3 font-weight-normal">Login</h1>
        </div>
        <div class="form-label-group">
            <input type="text" name="nomeLogin" id="inputnome" class="form-control" placeholder="email" required autofocus>
            <label for="inputnome">Usuário </label>
        </div>
        <div class="form-label-group">
            <input type="password" name ="senha" id="inputPassword" class="form-control" placeholder="Password" required autofocus></br>        
            <label for="inputPassword">Senha</label>
        </div>
        <button class="btn btn-primary btn-group-toggle btn-block" type="submit">Entrar </button>
        <p class="mt-5 mb-3  text-center">&copy; SIGB 2017-2018</p>
        </form>
    </div>
  </body>
</html>
