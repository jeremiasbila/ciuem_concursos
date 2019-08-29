<?php
    $servername = "localhost";
    $username = "root";
    $password = "";    
    $dbname = "concursos";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nrCadastro = $_POST['nrCadastro'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $nacionalidade = $_POST['nacionalidade'];
    $tipoCorrente = $_POST['tipoCorrente'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $endereco = $_POST['endereco'];
    $contacto = $_POST['contacto'];
    $nuit = $_POST['nuit'];

    //Consulta
    $string_sql = "INSERT INTO `fornecedor`(`idFornecedor`, `nrCadastro`, `nome`, `email`, `senha`, `nacionalidade`, `tipoCorrente`, `provincia`, `distrito`, `endereco`, `contacto`, `nuit`) VALUES (null,'".$nrCadastro."','".$nome."','".$email."','".$senha."','".$nacionalidade."','".$tipoCorrente."','".$provincia."','".$distrito."','".$endereco."','".$contacto."','".$nuit."')";
     
    if ($conn->query($string_sql) === TRUE) {
        header("Location:../autenticacao/login.php");
    } else {
        echo "Error: " . $string_sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>