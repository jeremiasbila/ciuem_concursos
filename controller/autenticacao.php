<?php 
session_start(); 
include "../modal/conexao.php" ;


	if(isset($_POST['Login']))
	{
		
		if(empty($_POST['nome'])||empty($_POST['inputPassword']))
		{
			
			header("location:../view/autenticacao/login.php?Empty= Esta em branco!");
			 
		}
		else
			
		{
			$sql = "SELECT * FROM fornecedor employee where nome='".$_POST['nome']."' and senha='".$_POST['inputPassword']."'";
			$resultado = mysqli_query($link,$sql);
			
			if(mysqli_fetch_assoc($resultado))
			{
				$_SESSION['Logado']=$_POST['nome'];
				header("location:../view/website/index.php?login=ok");
			}
			
			else
			{
				
				header("location:../view/autenticacao/login.php?login=erro");
			}
		}
	}



?>