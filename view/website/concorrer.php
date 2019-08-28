<?php include "../estrutura/website/header.php" ?>
<?php include "../estrutura/website/navbar.php" ?>

<?php 

?>

<?php 
include "../../modal/conexao.php" ;
$id= $_GET['id'];
$sql = "SELECT * FROM concurso where concurso_id='$id'";
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
					<?php while($com = mysqli_fetch_array($resultado)){ ?>
                    <b>Referencia:</b> <?php echo $com['referencia']; ?>
                    <hr>
                    <b>Concurso:</b> <?php echo $com['designacao']; ?>
                    <hr>
                    <b>Modalidade:</b><?php echo $com['modalidade']; ?>
                    <hr>
                    <b>Descricao:</b><?php echo $com['descricao']; ?>.
					<?php } ?>
                    <hr>
                        <a class="btn btn-primary btn-lg" role="button"  href="../../controller/concorrer.php?id=<?php echo $id;?>">Confirmar</a>
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