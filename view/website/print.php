<?php include "../estrutura/website/header.php" ?>
<?php include "../estrutura/website/navbar.php" ?>

<?php 
include "../../modal/conexao.php" ;
$id= $_GET['id'];
$sql = "SELECT * FROM concurso WHERE concurso_id='$id'";
$resultado = mysqli_query($link,$sql);
?>

    <header>
        <section class="publico">
            <div id="content-wrapper">
                <div class="container-fluid">
                    <h3>Imprimir</h3>
                    <hr class="my-4"/>
                    <div class="jumbotron" style="padding: 43px;width: 1107px;">
                        <h1 class="display-5">Concurso:</h1>
                        <hr>
                        <?php while($com = mysqli_fetch_array($resultado)){ ?>
                            <b>Referencia:</b> <?php echo $com['referencia']; ?>
                            <hr>
                            <b>Descricao:</b> <?php echo $com['descricao']; ?>
                            <hr>
                            <b>Modalidade:</b><?php echo $com['modalidade']; ?>
                            <hr>
                            <b>Aquisicao:</b><?php echo $com['aquisicao']; ?>.
                        <?php } ?>
                        <hr>
                        <a class="btn btn-primary btn-lg" onclick="myFunction()">Imprimir</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </header>
<?php include "../estrutura/website/footer.php" ?>
<script>
function myFunction() {
  window.print();
}
</script>
<style type="text/css">
    body.site section#footer {
    padding: 86px;
}
body.site #footer {
    background: #087F61 !important;
    height: 196px!important;
}
</style>




















