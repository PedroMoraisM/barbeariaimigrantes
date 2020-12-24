<?php 

include("../../conexao.php");	
    
	$bid = $_GET['bid'];
	
	$queryimg=mysqli_query($conexao,"SELECT Blog_Imagem FROM blog WHERE Blog_Codigo = $bid");
	while($exibeimg=mysqli_fetch_array($queryimg)){
	$imgapagar = $exibeimg['Blog_Imagem'];	
	unlink("../../img/blog/$imgapagar"); }
	
	$query = mysqli_query($conexao,"DELETE FROM blog WHERE Blog_Codigo = '$bid'");
	
	if($query) {
				
				header("location:../blog.php");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>