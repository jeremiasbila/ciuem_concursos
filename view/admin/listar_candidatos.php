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
            <a href="../../view/admin/"style=" color: #efff00;" >Concursos :</a>
          </li>
          <li class="breadcrumb-item active">listar candidatos</li>
        </ol>

        <div id="content-wrapper" >

      <div class="container-fluid">
            <div class="table-responsive" >
                  <table class="table table-bordered">
                  <thead class="thead-dark">
                        <tr>
                        <th >NOME</th>
                        <th>DESIGNACAO DO CONCURSO</th>
                        <th>DATA DE INICIO</th>
                        <th>DATA FINAL</th>
                        <th>PRINT</th>
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
                            <td><a href="print2.php?id=<?php  echo $dados['concurso_id']; ?>"><button  type="button" class="btn btn-success btn-sm">Imprimir</button></a></td>
                          </tr>
                          <?php } ?>
                        </tr>
                  </tbody>
                  </table>
            </div>
              
      </div>  <!-- /.container-fluid -->
</div>   

      </div>  <!-- /.container-fluid -->
      <style type="text/css">
        .table .thead-dark th {
    color: #fff;
    background-color: #087f61!important;
    border-color: #087f61!important;
}
      .breadcrumb {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #087f61!important;
    border-radius: 0.25rem;
}

.breadcrumb-item.active {
    color: #ffffff!important;
}
      </style>
<?php include "../estrutura/admin/footer.php"?>
