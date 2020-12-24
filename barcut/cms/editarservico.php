<!DOCTYPE html>
<html lang="en">
<?php 
session_start();

if($_SESSION['sessao'] != 159326874){
echo "Você não está autorizado a acessar essa página!";}
else {
include("../conexao.php");
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Serviços</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        
		<?php 
		include("menu.php");
		?>
		
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
						 <div class="col-lg-6">
							<div class="card">
                                    <div class="card-header">
                                        <strong>Editar dados do serviço</strong> 
                                    </div>
									
									<?php 
									$sid = $_GET['sid'];

									$query_servico = mysqli_query($conexao,"SELECT * FROM servicos WHERE Servico_Cod = $sid");
										while($exibir_serv=mysqli_fetch_array($query_servico)) {
									?>
                                    <div class="card-body card-block">
                                        <form action="servicospost/alterardados.php" method="POST" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label">Nome do Serviço</label>
                                                <input type="text" value="<?php echo $exibir_serv['Servico_Nome'];?>"  name="nomeserv" placeholder="Nome..." class="form-control">                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class="form-control-label">Tempo de duração (em minutos) </label>
                                                <input type="text" value="<?php echo $exibir_serv['Servico_Duracao'];?>" name="temposerv" placeholder="Tempo..." class="form-control">                                                
                                            </div>
											<div class="form-group">
                                                <label for="nf-email" class="form-control-label">Preço do Serviço </label>
                                                <input type="text" value="<?php echo $exibir_serv['Servico_Preco'];?>" name="precoserv" placeholder="Preço..." class="form-control">                                                
                                            </div>
											<input type="hidden" value="<?php echo $sid;?>" name="sid">
											
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Enviar
                                        </button> 
										</form>
                                    </div>
										<?php }; ?>
                                    
									
                             </div>
                         </div>
						
						
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Descrição</th>                                                
                                                <th>Opções</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$query_servicodesc = mysqli_query($conexao,"SELECT * FROM servicosdesc WHERE Sdesc_Servico = $sid;");
										while($exibir_servdesc=mysqli_fetch_array($query_servicodesc)) {
										?>
                                            <tr>
											<form action="servicospost/alterardescricao.php" method="POST">
                                                <td><?php echo $exibir_servdesc['Sdesc_Cod'];?></td>
                                                <td><input name="descnome" type="text" value="<?php echo $exibir_servdesc['Sdesc_Desc'];?>"> </td>  
													
												
                                                <td> 												
													<div class="table-data-feature">  
													
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <i class="zmdi zmdi-edit"> </i> 
                                                        </button>
														<input type="hidden" value="<?php echo $sid;?>" name="sid">
														<input type="hidden" value="<?php echo $exibir_servdesc['Sdesc_Cod'];?>" name="desccod">
											</form>			
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Excluir">
                                                            <a href="servicospost/excluirdescricao.php?sdesc=<?php echo $exibir_servdesc['Sdesc_Cod'];?>&sid=<?php echo $sid ?>"> <i class="zmdi zmdi-delete"></i> </a>
                                                        </button>   
														
                                                    </div>
												</td>
                                                
                                            </tr>
                                         <?php 
										 };
										 ?>
											
                                        </tbody>
										
                                    </table>
									
									<div class="card">
                                    <div class="card-header">
                                        <strong>Adicionar Descrição sobre o Serviço</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="servicospost/adicionardescricao.php" method="POST" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Descrição</label>
                                                <input type="text" name="novadesc" placeholder="Descrição.." class="form-control">
												<input type="hidden" value="<?php echo $sid;?>" name="sid">
                                                <span class="help-block">Limite de 5 descrições por serviço!</span>
                                            </div>
                                            <input class="btn btn-success" type="submit" value="Adicionar">
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        
                                    </div>
                                </div>
									
									
                                </div>
                            </div>                            
                        </div>            
                      </div>
                            
                    </div>			
					
					
                        <br><br><br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html> <?php }; ?>
<!-- end document-->
