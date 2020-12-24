<?php 
					include("../../conexao.php");
					
					if(empty($_POST['novadesc']) and empty($_POST['sid'])) {echo "erro";} else {
						
					 $desc = $_POST['novadesc'];
					 
					 $sid = $_POST['sid'];
					
					
					$adddesc =  mysqli_query($conexao,"INSERT INTO servicosdesc (Sdesc_Desc,Sdesc_Servico) VALUES ('$desc','$sid')");
					
					if(!$adddesc) {
						printf("Error: %s\n",mysqli_error($conexao));
						exit();
					}						
					 header("location:../editarservico.php?sid=$sid");
					
					}
					
					?>