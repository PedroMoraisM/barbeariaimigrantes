<?php 

include("../../conexao.php");	
    
	$bid = $_GET['bid'];
	
	$queryimg=mysqli_query($conexao,"SELECT Barbeiro_Imagem FROM barbeiros WHERE Barbeiro_Codigo = $bid");
	while($exibeimg=mysqli_fetch_array($queryimg)){
	$imgapagar = $exibeimg['Barbeiro_Imagem'];	
	unlink("../../img/team/$imgapagar"); }
	
	$query = mysqli_query($conexao,"DELETE FROM barbeiros WHERE Barbeiro_Codigo = '$bid'");
	
	if($query) {				
				header("location:../barbeiros.php");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>