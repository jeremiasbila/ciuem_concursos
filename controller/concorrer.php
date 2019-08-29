<?php
	session_start();
	if(isset($_SESSION['Logado'])){
              $jj= $_SESSION['Logado'];
			  echo $jj;

		include "../modal/conexao.php" ;
		$id= $_GET['id'];

		$sql="SELECT idFornecedor FROM `fornecedor` WHERE nome='$jj'";
		$result = mysqli_query($link,$sql);
		
		while($d= mysqli_fetch_array($result)){
			$xxx= $d['idFornecedor'];
			echo $xxx;

			$string_sql="INSERT INTO `candidatura`(`idCandidatura`, `idConcursos`, `idFornecedores`) VALUES (null,$id,'".$xxx."')";
			$resultado = mysqli_query($link,$string_sql);
			
			if($resultado){
			
				header("location:../view/website/index.php");
			}
		}
		
	}
 ?> 