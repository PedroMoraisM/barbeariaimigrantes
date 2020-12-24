<?php 

include("../../conexao.php");	
    
	$pid = $_GET['pid'];
	
	$queryimg=mysqli_query($conexao,"SELECT Produto_Imagem FROM produtos WHERE Produto_Codigo = $pid");
	while($exibeimg=mysqli_fetch_array($queryimg)){
	$imgapagar = $exibeimg['Produto_Imagem'];	
	unlink("../../img/produtos/$imgapagar"); }
	
	$query = mysqli_query($conexao,"DELETE FROM produtos WHERE Produto_Codigo = '$pid'");
	
	if($query) {
				
				header("location:../produtos.php");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>