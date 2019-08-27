<?php include "../estrutura/website/header.php" ?>
<?php include "../estrutura/website/navbar.php" ?>


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
                    <h1 class="display-5">Concorrente: <?php echo "" .$_SESSION['Logado'];?></h1>
                    <hr>
                    <b>Referencia:</b> 
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