<?php
include "../modal/conexao.php" ;

    $nome = $_POST['nome'];
    $inputEmail = $_POST['inputEmail'];
    $senha = $_POST['senha'];
	$nrCadastro = $_POST['nrCadastro'];
	$nacionalidade = $_POST['nacionalidade'];
	$tipoCorrente = $_POST['tipoCorrente'];
	$provincia = $_POST['provincia'];
	$distrito = $_POST['distrito'];
	$endereco = $_POST['endereco'];
	$contacto = $_POST['contacto']; 
	$nuit = $_POST['nuit'];

    $string_sql = "INSERT INTO `fornecedor`(`nome`, `inputEmail`, `senha`, `nrCadastro`, `nacionalidade`, `tipoCorrente`, `provincia`, `distrito`, `endereco`, `contacto`, `nuit`) VALUES ('".$nome."','".$inputEmail."','".$senha."','".$nrCadastro."','".$nacionalidade."','".$tipoCorrente."','".$provincia."','".$distrito."','".$endereco."','".$contacto."','".$nuit."')";
     
    if ($link ->query($string_sql) === TRUE) {
        header("location:../view/autenticacao/registar.php");
    } else {
        echo "Error: " . $string_sql . "<br>" . $link->error;
    }
    
    $link->close();
?>