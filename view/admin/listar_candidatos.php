<?php include "../estrutura/admin/header.php" ?>
<?php include "../estrutura/admin/sidebar.php" ?>



<?php 
include "../../modal/conexao.php" ;
$sql = "SELECT * FROM candidatura INNER JOIN concurso ON candidatura.idConcursos = concurso.concurso_id INNER JOIN fornecedor ON candidatura.idFornecedores = fornecedor.idFornecedor";
$resultado = mysqli_query($link,$sql); ?>
<div id="content-wrapper">

      <div class="container-fluid">
            <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="http://localhost/concursos/view/admin">Concursos</a>
          </li>
          <li class="breadcrumb-item active">listar candidatos</li>
        </ol>

        <div id="content-wrapper">

      <div class="container-fluid">
            <div class="table-responsive">
                  <table class="table table-bordered">
                  <thead class="thead-light">
                        <tr>
                        <th >NOME</th>
                        <th>DESIGNACAO DO CONCURSO</th>
                        <th>DATA DE INICIO</th>
                        <th>DATA FINAL</th>
                        </tr>
                  </thead>
                  <tbody>
                        <tr>
                        <?php while($dados = mysqli_fetch_array($resultado)){ ?>
                          <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['designacao']; ?></td>
                            <td><?php echo $dados['dataInicio']; ?></td> 
                            <td><?php echo $dados['datafim']; ?></td> 
                          </tr>
                          <?php } ?>
                        </tr>
                  </tbody>
                  </table>
            </div>
              
      </div>  <!-- /.container-fluid -->
</div>   

      </div>  <!-- /.container-fluid -->
<?php include "../estrutura/admin/footer.php"?>