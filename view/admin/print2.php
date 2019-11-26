<?php include "../estrutura/admin/header.php" ?>
<?php include "../estrutura/admin/sidebar.php" ?>

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
                <div class="jumbotron" style="padding: 43px;width: 1079px;">                                                            
                    <h1 class="display-5">Concurso:</h1>
                    <hr>
					<?php while($com = mysqli_fetch_array($resultado)){ ?>

                    <hr>
                    <b>Modalidade:</b> <?php echo $com['modalidade']; ?>
                    <hr>
                    <b>Referencia:</b> <?php echo $com['referencia']; ?>
                    <hr>
                    <b>Modalidade:</b> <?php echo $com['designacao']; ?>
                    <hr>
                    <b>Aquisicao:</b> <?php echo $com['aquisicao']; ?>
                    <hr>
                    <b>Data de Inicio:</b><?php echo $com['dataInicio']; ?>
                    <hr>
                    <b>Data Final:</b><?php echo $com['datafim']; ?>.
                    <b>Descricao:</b> <?php echo $com['descricao']; ?>
                    <hr>
					<?php } ?>
                    <hr>
                        <a href="invoice.php?id=<?php  echo $dados['concurso_id']; ?>" class="btn btn-primary btn-lg">Imprimir</a>
                       
                    </p>
                </div> 
        </div>
    </div>
</section>
</header>













































<script>
function myFunction() {
  window.print();
}
</script>






















<?php include "../estrutura/admin/footer.php"?>