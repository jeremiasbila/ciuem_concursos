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
    <i class="fas fa-bars"></i>
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
           
            <a href="  ../autenticacao/login.php"><button type="button" class="btn btn-outline-warning">Entrar</button></a>
        </li>

    <?php } ?>
    </ul>
    </nav>


  <div class="container" style="
    padding-top: 18px;">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header" style="font-size:20px!important;">Registo</div>
      <div class="card-body">

        <form action="../admin/registar_fornecedores.php" method="POST">
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nrCadastro" name="nrCadastro" class="form-control" placeholder="Numero de cadastro unico" required="required" autofocus="autofocus">
                  <label for="nrCadastro">Numero de cadastro unico</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome proprio" required="required">
                  <label for="nome">Nome proprio</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required="required">
                  <label for="senha">Senha</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmarSenha" class="form-control" placeholder="Confirmar senha" required="required">
                  <label for="confirmarSenha">Confirmar senha</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              <select id="nacionalidade" class="custom-select" name="nacionalidade">
                  <option selected>Nacionalidade</option>
                  <option value="Mocambicana">Mocambicana</option>
                  <option value="Estrangeira">Estrangeira</option>
                </select>
              </div>
              <div class="col-md-6">
                <select id="tipoCorrente" class="custom-select" name="tipoCorrente">
                  <option selected>Tipo de corrente</option>
                  <option value="Singular">Singular</option>
                  <option value="Empresa">Empresa</option>
                </select>
                </div>
              </div>
            </div>

            <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              <select id="provincia" class="custom-select" name="provincia">
                  <option selected>Provincia</option>
                  <option value="Maputo">Maputo</option>
                  <option value="Gaza">Gaza</option>
                </select>
              </div>
              <div class="col-md-6">
                <select id="distrito" class="custom-select" name="distrito">
                  <option selected>Distrito</option>
                  <option value="Kamaxaquene">Kamaxaquene</option>
                </select>
                </div>
              </div>
            </div>

            <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                  <div class="form-label-group">
                      <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereco" required="required">
                      <label for="endereco">Endereco</label>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-label-group">
                      <input type="text" id="conctacto" name="contacto" class="form-control" placeholder="Conctacto" required="required">
                      <label for="conctacto">Conctacto</label>
                  </div>
              </div>
            </div>
            </div>

            <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="nuit" name="nuit" class="form-control" placeholder="NUIT" required="required">
                      <label for="nuit">NUIT</label>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="color:white!important;">Criar conta</button>
        </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php" style="color:#EECE00!important;">Iniciar sess&atildeo</a>
            <a class="d-block small" href="esqueceu-senha.php" style="color:#EECE00!important;">Esqueceu senha?</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
