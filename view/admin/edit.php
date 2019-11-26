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
    <body>
    <form name="frmUser" method="POST" action="registar_concursos.php"  class="formulario">
        <div>
        </div>
        <div style="padding-bottom:5px;">

        </div>
         <br>
         <?php while($row = mysqli_fetch_array($resultado)){ ?>
        <input type="text" name="concurso_id"  value="<?php echo $row['concurso_id']; ?>">
        <br>
        Referencia :<br>
        <input type="text" name="referencia" class="txtField" value="<?php echo $row['referencia']; ?>">
        <br>
        Descricao :<br>
        <input type="text" name="descricao" class="txtField" value="<?php echo $row['descricao']; ?>">
        <br>
        Modaliade:<br>
        <input type="text" name="modalidade" class="txtField" value="<?php echo $row['modalidade']; ?>">
        <br>
        Aquisicao:<br>
        <input type="text" name="aquisicao" class="txtField" value="<?php echo $row['aquisicao']; ?>">
        <br>
         <?php } ?>
        <input type="submit" name="submit" value="Submit" class="buttom" ><a href="listar_concursos.php"/>

    </form>
    </body>
    </html>

<?php include "../estrutura/admin/footer.php"?>
