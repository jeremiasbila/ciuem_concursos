<?php
	session_start();
	if(isset($_SESSION['Logado'])){
		header("location:../../view/admin/index.php");
	}
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Concursos</title>

  <!--Call my CSS-->
  <link href="../../css/app.css" rel="stylesheet" type="text/css">

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark" style="background-image: url('../../imagens/background.jpg')!important;
    background-repeat: no-repeat!important;
    background-size: 100%!important;">
    <nav class="navbar navbar-expand fixed-top">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">

    </button>
      <a class="navbar-brand mr-1" href="../../view/website/">Concursos</a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-50">


    <!-- <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">Perfil</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
    </li> -->
    <?php
            if(isset($_SESSION['Logado'])){
                echo ''. $_SESSION['Logado'].'<br/>';?>
        <li>
            <a href="../../controller/logout.php?Logout"><button type="button" class="btn btn-outline-warning">Entrar</button></a>

        </li>

    <?php } else { ?>

        <li>

            <a href="../autenticacao/registar.php"><button type="button" class="btn btn-outline-warning">Cadastre-se</button></a>
        </li>

    <?php } ?>
    </ul>
    </nav>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="font-size:20px!important;">Iniciar sessão</div>
      <div class="card-body">
        <form  action="../../controller/autenticacao.php" method="post">
           <div class="form-group">
          <div class="form-label-group">
                  <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required="required" >
                  <label for="nome">Nome proprio</label>
                </div>
              </div>
          <div class="form-group">
            <div class="form-label-group">
<<<<<<< HEAD
              <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Senha" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
=======

                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required="required" autofocus="autofocus">
                <label for="inputName">Nome</label>

            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required="required">
>>>>>>> 5bd7d2e2d12d5cfec81a38d2b4e4a7b885615563
              <label for="inputPassword">Senha</label>
            </div>
          </div>

          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Lembrar senha
              </label>
            </div>
          </div>
                    <button class="btn btn-success" name="Login" id="Login">Entrar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="registar.php" style="color:#EECE00!important;">Criar conta</a>
        <!--  <a class="d-block small" href="esqueceu-senha.php" style="color:#EECE00!important;">Esqueceu a senha?</a>-->
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
   <style type="text/css">
     .container{
          padding-top: 40px;
     }
     .card-header{
  background-color: #087f61!important;
  color: #FFF!important;
}
   </style>
  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>


</body>
</html>

