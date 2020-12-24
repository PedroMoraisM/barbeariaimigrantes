<?php 

include("../../conexao.php");	
    
	$gid = $_GET['gid'];
	
	$queryimg=mysqli_query($conexao,"SELECT Galeria_Nome FROM imagens_galeria WHERE Galeria_Codigo = $gid");
	while($exibeimg=mysqli_fetch_array($queryimg)){
	$imgapagar = $exibeimg['Galeria_Nome'];	
	unlink("../../img/gallery/$imgapagar"); }
	
	$query = mysqli_query($conexao,"DELETE FROM imagens_galeria WHERE Galeria_Codigo = $gid");
	
	if($query) {
				
				header("location:../galeria.php");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>