<?php 

include("../../conexao.php");	
    
	$pid = $_GET['pid'];
	
	$query = mysqli_query($conexao,"SELECT Produto_Status FROM produtos WHERE Produto_Codigo = '$pid'");
	$exibe = mysqli_fetch_array($query);
	
	$status = $exibe['Produto_Status'];
	
	if($status=="Disponível") {
	$querymudanca = mysqli_query($conexao,"UPDATE produtos SET Produto_Status = 'Indisponível' WHERE Produto_Codigo = '$pid'");
	} 
	else if($status=="Indisponível") {
	$querymudanca = mysqli_query($conexao,"UPDATE produtos SET Produto_Status = 'Disponível' WHERE Produto_Codigo = '$pid'");
	}
	
	
	if($querymudanca) {				
				header("location:../produtos.php");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>