<?php include "../estrutura/admin/header.php" ?>
<?php include "../estrutura/admin/sidebar.php" ?>

<?php
include "../../modal/conexao.php" ;

$id= $_GET['id'];
$sql = "SELECT * FROM concurso WHERE concurso_id='$id'";
$resultado = mysqli_query($link,$sql);


if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE concurso set 
         concurso_id='". $_POST['concurso_id'] . "',
         referencia='" . $_POST['referencia'] . "', 
         descricao='" . $_POST['descricao'] . "', 
         aquisicao='" . $_POST['aquisicao']  . "' 
         WHERE concurso_id='" . $_POST['concurso_id'] . "'");
         $message = "Record Modified Successfully";
}


?>
    <html>
    <head>
        <title>EDITAR LISTAR CONCURSOS</title>
    </head>
       <link href="../../css/app.css" rel="stylesheet" type="text/css">
        
    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">
    <style type="text/css">
        .hiden{
            display:none;
        }

        .form-group{
            font-size: 15px;
        }
        .ff{
            color: #fff!important!;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
         <div class="col-md-12">
            <form name="frmUser" method="POST" action="registar_concursos.php"  class="formulario">
        <div>
        </div>
        <div style="padding-bottom:5px;">

        </div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">EDITAR CONCURSO</a>
          </li>
     
        </ol>
    
         <?php while($row = mysqli_fetch_array($resultado)){ ?>
        <input class="hiden" type="text" name="concurso_id"  value="<?php echo $row['concurso_id']; ?>">
        <br>
        <div class="form-group">
        Referencia :<br>
        <input type="text" name="referencia" class="txtField form-control" value="<?php echo $row['referencia']; ?>">
       </div>
        <br>
        <div class="form-group">
        Descricao :<br>
        <input type="text" name="descricao" class="txtField form-control" value="<?php echo $row['descricao']; ?>">
       </div>
        <br>
        <div class="form-group">
        Modaliade:<br>
        <input type="text" name="modalidade" class="txtField form-control" value="<?php echo $row['modalidade']; ?>">
        </div>
        <br>
        <div class="form-group">
        Aquisicao:<br>
        <input type="text" name="aquisicao" class="txtField  form-control" value="<?php echo $row['aquisicao']; ?>">
        </div>
        <br>
         <?php } ?>
        <input type="submit" name="submit" value="Submit" class="buttom btn btn-success" ><a href="listar_concursos.php"/>

    </form>
        </div>
         </div>
        
        </div>
       
    

    </body>
    </html>

<?php include "../estrutura/admin/footer.php"?>
