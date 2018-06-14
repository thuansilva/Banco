<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../Banco/img/favicon.ico">
    <title>SiGB</title>
    <link href="../Banco/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Banco/css/home.css" rel="stylesheet">
    <link href="../Banco/css/testetitulo.css" rel="stylesheet">
    <link rel="stylesheet" href="../Banco/css/font-awesome.min.css">
  </head>

  <body>

    <!--                    Navbar                        -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
      <div class="container ">
      <a class="navbar-brand h1" href="#home.php"> SIGB </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" 
        data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item dropdown px-2">
              <a class="nav-link dropdown-toggle " href="#" id="navbarSite" role="button" 
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="/Banco/cadastroProf.php">Professor(a)</a>
                    <a class="dropdown-item" href="/Banco/cadastroAluno.php"> Aluno(a)</a>
                    <a class="dropdown-item" href="/Banco/cadastroLR.php"> Obras</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/Banco/cadastroBibli.php"> Bibliotecário(a)</a>
                  </div>
            </li>
            <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarSite" role="button" 
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesquisar</a>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="/Banco/pesquisarProfessor.php"> Professor</a>
                        <a class="dropdown-item" href="/Banco/pesquisarAlunos.php"> Aluno</a>
                      <a class="dropdown-item" href="/Banco/pesquisarObras.php">Obras</a>
                    </div>
            </li>
            <ul class="navbar-nav px-2">
                <li class="nav-item ">
                   <a class="nav-link" href="/Banco/emprestimo.php"> Empréstimo</a>
                </li>
            </ul>
            <ul class="navbar-nav px-2">
                <li class="nav-item ">
                   <a class="nav-link" href="/Banco/devolucao.php"> Devolução</a>
                </li>
            </ul>
          </ul>
           <ul class="navbar-nav ml-auto px-md-4">
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Usuário </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"> Perfil </a>
                  <a class="dropdown-item" href="index.php"> Sair</a>
                </div>
             </li>
           </ul>
        </div>
      </div>     
    </nav>





  
    <!--                    BEm VIndo                        -->
  <div class="position-relative over  p-3 p-md-5 text-center " id="fundo">
      
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal  " id="ap-bemvindo">Bem Vindo ao SIGB</h1>
        <p class=" lead font-weight-normal "> Organizando sua Biblioteca com alguns Clicks</p>
      </div>
  </div>


 <!--                    Conteúdo                       -->


      <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
          <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5  
          text-center text-white overflow-hidden" style="border-radius: 21px 21px 0 0">
              <h2>Quem Somos?</h2>
              <p class="lead" align='justify'>Sistema criado por alunos da Universidade Federal do Amazonas
                  para auxiliar no gerencimanto de bibliotecas. somos um bando de azarados que nasceu                 
                  antes da exploração espacial e depois da epoca das navegações e agora tem que fazer essa merda</p>            
          </div>
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 mx-auto 
               text-center overflow-hidden "  style="border-radius: 21px 21px 0 0">
              <div class="my-3 p-3">
                <h2 class="display-5">Para vocÊ!</h2>
                <p class="lead" align='justify'>adasdasdasd dfsdfsdfsdfadfaasdfafadfasdfasdfasdfasdf  dadsadasdsadsadasddsdasdsad
                asdasdadasdadsadsadadadasdasadaaffjsdafjfadfjadjflçdajslfjalsjdfkl</p>
              </div>
            </div>
        </div>

<!--                    Rodapé (Footer)                      -->
  
        <section id="contact">
          <div class="container">
              <div class="col-lg-6 mx-auto text-center ">
                <h2 class="section-heading ">Dúvidas ou Sugestões!</h2>
                <hr class="my-3 py-2 ">
                <p >Entre em Contato Conosco!</p>
            </div>
            <div class="row">
              <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>66666666 capeta</p>
              </div>
              <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                  <p><a href="mailto:your-email@your-domain.com">thaiszinharoxpg@gmail.com</a></p>
              </div>
            </div>
          </div>
        </section>
        <p class="mt-5 mb-3  text-center">&copy; SIGB Todos os Direitos Reservados</p>



    
    <!-- Bootstrap JavaScript
    ================================================== -->
    <!-- -->
    <script src="./js/slim.min.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js" ></script>
    
  </body>
</html>
