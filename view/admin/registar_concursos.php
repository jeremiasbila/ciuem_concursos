<?php
    $servername = "localhost";
    $username = "root";
    $password = "#password#";    
    $dbname = "concursos";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $referencia = $_POST['referencia'];
    $modalidade = $_POST['modalidade'];
    $designacao = $_POST['designacao'];
    $aquisicao = $_POST['aquisicao'];
    $dataInicio = $_POST['dataInicio'];
    $dataFim = $_POST['dataFim'];
    $descricao = $_POST['descricao'];
    //$documento = $_POST['doc'];

    $string_sql = "INSERT INTO `concurso`(`concurso_id`, `modalidade`, `referencia`, `designacao`, `aquisicao`, `dataInicio`, `datafim`, `descricao`, `ficheiro`) VALUES (null,'".$modalidade."','".$referencia."','".$designacao."','".$aquisicao."','".$dataInicio."','".$dataFim."','".$descricao."',null)";
     
    if ($conn->query($string_sql) === TRUE) {
        header("Location:cadastrar_concursos.php");
    } else {
        echo "Error: " . $string_sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>