<?php include "../estrutura/website/header.php" ?>
<?php include "../estrutura/website/navbar.php" ?>

<?php 
include "../../modal/conexao.php" ;
$sql = "SELECT * FROM concurso co WHERE co.`previsto`=1 ";
$resultado = mysqli_query($link,$sql); 
?>

<header>
    <section class="publico">
    <div id="content-wrapper">
    <div class="container-fluid">
            <h3>Concurso Previsto </h3>
                <hr class="my-4"/>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                            <th>Refer&ecircncia</th>
                            <th>Designa&ccedil&atildeo</th>
                            <th>Modalidade</th>
                            <th>Aquisi&ccedil&atildeo</th>
                            <th>Items</th>
                            <th>Data de Inicio</th>
                            <th>Edital</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                        <?php while($dados = mysqli_fetch_array($resultado)){ ?>
                          <tr>
                            <td><?php echo $dados['referencia']; ?></td>
                            <td><?php echo $dados['designacao']; ?></td>
                            <td><?php echo $dados['modalidade']; ?></td>
                            <td><?php echo $dados['aquisicao']; ?></td>
                            <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Ver</button></td>
                            <td><?php echo $dados['dataInicio']; ?></td>
                            <td><a href="pdf/invoice.php"><button type="button" class="btn btn-success btn-sm">Imprimir</button></a></td>
                            </tr>
                          <?php } ?>
                        </tr>
                    </tbody>
                    </table>
                </div>
        </div>
    </div>
</section>
</header>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4 class="modal-title" style="
    margin-right: 374px";>VER ITEMS </h4>
        </div>
        <div class="modal-body">
          <p>items items .</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
      </div>

  </div>
</div>

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