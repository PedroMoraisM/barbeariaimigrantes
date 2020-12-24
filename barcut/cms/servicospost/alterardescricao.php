<?php 
					include("../../conexao.php");
					
					if(empty($_POST['descnome']) and empty($_POST['desccod']) and empty($_POST['sid'])) {echo "erro";} else {
						
					 $desc_servico = $_POST['descnome'];
					 $desccod = $_POST['desccod'];
					 $sid = $_POST['sid'];
					
					
					$alterardesc =  mysqli_query($conexao,"UPDATE servicosdesc SET Sdesc_Desc = '$desc_servico' WHERE Sdesc_Cod = $desccod");
					
					if(!$alterardesc) {
						printf("Error: %s\n",mysqli_error($conexao));
						exit();
					}						
					 header("location:../editarservico.php?sid=$sid");
					
					}
					
					?>