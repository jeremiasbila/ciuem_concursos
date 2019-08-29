<?php 
    session_start();
?>
<body class="site">
    <nav class="navbar navbar-expand fixed-top">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
   
    </button>
    <a class="navbar-brand mr-1" href="http://localhost/concursos/view/website">Concursos</a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-50 login_name">


    
    <?php 
            if(isset($_SESSION['Logado'])){
                echo ''. $_SESSION['Logado'].'<br/>';?>
        <li>
            <a href="../../controller/logout.php?Logout"><button type="button" class="btn btn-outline-warning btn-2">Sair</button></a>
            
        </li>
        
    <?php } else { ?>

        <li>
            <a href="  ../autenticacao/login.php"><button type="button" class="btn btn-outline-warning">Entrar</button></a>
            <a href="../autenticacao/registar.php "><button type="button" class="btn btn-outline-warning">Cadastre-se</button></a>
        </li>

    <?php } ?>
    </ul>
    </nav>

    <style type="text/css">
        .login_name{
        color: beige;
    margin-bottom: -14px;
    font-size: 17px;
    font-family: inherit;
        }

        .btn-2{
                margin-top: -4px;
        }
    </style>