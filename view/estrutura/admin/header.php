<?php 
  session_start();
  
?>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="ucolore">
      <title>Concursos</title>

      <!--Call my CSS-->
      <link href="../../css/app.css" rel="stylesheet" type="text/css">
      
      <!-- Custom fonts for this template-->
      <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

      <!-- Page level plugin CSS-->
      <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="../../css/sb-admin.css" rel="stylesheet">
</head>
<body id="page-top">

  <nav class="navbar navbar-expand static-top">

    <a class="navbar-brand mr-1" href="../../view/website/">Concursos</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="post">
      <div class="input-group">
        <input  name="valueToSearch" id="pesquisar" type="text" class="form-control" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button" id="btnPesquisar">
            <i class="fas fa-search" id="Search"></i>
          </button>
         
		  <div> 
      <?php 
			if(isset($_SESSION['Logado'])){
				echo '  Bem Vindo '. $_SESSION['Logado'].'<br/>';
		
			}
			?></div>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
	   <?php 
        echo '<a href="../../controller/logout.php?Logout" >Sair</a>';
      ?>
	 
    </ul>
  </nav>