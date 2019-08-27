<?php include "../estrutura/website/header.php" ?>
<?php include "../estrutura/website/navbar.php" ?>

<body class="site">
    <nav class="navbar navbar-expand fixed-top">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand mr-1" href="http://localhost/concursos/website">Concursos</a>

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
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i> <span style="color:yellow;font-weight:500;">Ucolore</span> 
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
      </li>
    </ul>
    </nav>

<?php 
include "../../modal/conexao.php" ;
$sql = "SELECT * FROM concurso";
$resultado = mysqli_query($link,$sql); 
?>

<header>
    <section class="publico">
    <div id="content-wrapper">
    <div class="container-fluid">
            <h3>Concorrer </h3>
                <hr class="my-4"/>
                <div class="jumbotron">
                    <h1 class="display-5">Joaquim Ucolore</h1>
                    <hr>
                    <b>Referencia:</b> UEM/2019
                    <hr>
                    <b>Concurso:</b> Material de escritorio
                    <hr>
                    <b>Modalidade:</b> Concurso publico
                    <hr>
                    <b>Descricao:</b> Aquisicao de material de escritorio para IMOVISA, com taxas atractivas.
                    <hr>
                        <a class="btn btn-primary btn-lg" href="index2.php" role="button" onclick="alert('Candidatura submetida')">Confirmar</a>
                    </p>
                </div> 
        </div>
    </div>
</section>
</header>
<?php include "../estrutura/website/footer.php" ?>
<style>
body.site #footer {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
    position: fixed!important;
    right: 0!important;
    bottom: 0!important;
    width:100%!important;
}
</style>