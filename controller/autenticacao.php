<?php 
session_start(); 
include "../modal/conexao.php" ;


		if(empty($_POST['nome'])||empty($_POST['inputPassword']))
		{
			
			header("location:../view/autenticacao/login.php?Empty= Esta em branco!");
			
			 
		}

	if(isset($_POST['Login']))
	{ 
		$sql = "SELECT * FROM fornecedor where nome='".$_POST['nome']."' and senha='".$_POST['inputPassword']."' and estado=1";
		$resultado = mysqli_query($link,$sql);

		  if(mysqli_fetch_assoc($resultado)){
				$_SESSION['Logado']=$_POST['nome'];
				header("location:../view/admin");
			} else{
				$_SESSION['Logado']=$_POST['nome'];
				header("location:../view/website/index.php?login=ok");
			}}elseif(!isset($_POST['Login'])){

				header("location:../view/autenticacao/login.php?login=erro");
			}

		

			

				
		
		



Z?>