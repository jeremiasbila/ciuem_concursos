<?php include "../estrutura/admin/header.php" ?>
<?php include "../estrutura/admin/sidebar.php" ?>
<?php 
include "../../modal/conexao.php" ;
$sql = "SELECT * FROM concurso";
$resultado = mysqli_query($link,$sql); 
?>
<div id="content-wrapper">

      <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
            <li class="breadcrumb-item" id="addconcurso" >
                  <a href="../../view/admin/cadastrar_concursos.php">Addicionar_Concursos</a>
            </li>

            </ol>
            <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                            <th>Referencia</th>
                            <th>Descricao</th>
                            <th>Modalidade</th>
                            <th>Aquisicao</th>
                            <th>Publicar</th>
                            <th>Items</th>
                              <th>Editar</th>
                                <th>Remover</th>
                        
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                        <?php while($dados = mysqli_fetch_array($resultado)){ ?>
                          <tr>
                            <td><?php echo $dados['referencia']; ?></td>
                            <td><?php echo $dados['descricao']; ?></td>
                            <td><?php echo $dados['modalidade']; ?></td>
                            <td><?php echo $dados['aquisicao']; ?></td>
                            <td ><input type="checkbox" id="publicar" onclick="alert('Tem certeza que deseja publicar este concurso?')"></td>
                            <td><a href="print.php?id=<?php  echo $dados['concurso_id']; ?>"><button type="button" class="btn btn-success btn-sm">Ver</button></a></td>
                            <td><a href="edit.php?id=<?php  echo $dados['concurso_id']; ?>"><button  type="button" class="btn btn-success btn-sm">editar</button></a></td>
                            <td><a href="apagar.php?id=<?php  echo $dados['concurso_id']; ?>"><button  type="button" class="btn btn-success btn-sm">Remover</button></a></td>
                        </tr>
                          <?php } ?>
                        </tr>
                    </tbody>
                    </table>
                </div>    
      </div>  <!-- /.container-fluid -->
</div>    
<style>
        
</style>

<?php include "../estrutura/admin/footer.php"?>