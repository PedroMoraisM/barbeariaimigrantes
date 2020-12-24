<?php 
					include("../../conexao.php");
					
					if(empty($_GET['sdesc'])) {echo "erro";} else {		
					
					$cod = $_GET['sdesc'];
					$sid = $_GET['sid'];
					
					$deldesc =  mysqli_query($conexao,"DELETE FROM servicosdesc WHERE Sdesc_Cod = '$cod' ");
					
					if(!$deldesc) {
						printf("Error: %s\n",mysqli_error($conexao));
						exit();
					}						
					 header("location:../editarservico.php?sid=$sid");
					
					}
					
					?>