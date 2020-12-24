<?php 
					include("../../conexao.php");
					
					if(empty($_POST['nomeserv']) and empty($_POST['temposerv']) and empty($_POST['precoserv'])) {echo "erro";} else {
						
					$nome_servico = $_POST['nomeserv'];
					$tempo_servico = $_POST['temposerv'];
					$preco_servico = $_POST['precoserv'];
					$sid = $_POST['sid'];
					
					$alterarserv =  mysqli_query($conexao,"UPDATE servicos SET Servico_Nome = '$nome_servico', Servico_Duracao = '$tempo_servico', Servico_Preco = '$preco_servico' WHERE Servico_Cod = $sid");
					
					if(!$alterarserv) {
						printf("Error: %s\n",mysqli_error($conexao));
						exit();
					}						
					 header("location:../editarservico.php?sid=$sid");
					
					}
					
					?>