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
    <title>Barbeiros</title>

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
                                        <strong>Editar dados do barbeiro</strong> 
                                    </div>
									
									
                                    <div class="card-body card-block">
                                        <form action="barbeiropost/editarbarb.php" method="POST" enctype="multipart/form-data" class="form-horizontal">								
                                          <?php 
										  $bid = $_GET['bid'];
										  $query_barb = mysqli_query($conexao,"SELECT * FROM barbeiros WHERE Barbeiro_Codigo = $bid;");
										  while($exibir_barb=mysqli_fetch_array($query_barb)) {
										  
										  ?>
											<!-- Titulo -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nome:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="nome" value="<?php echo $exibir_barb['Barbeiro_Nome'];?>"  class="form-control">                                                  
                                                </div>
                                            </div>                                
															
											
											<!-- Skill -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Competência:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="skill" value="<?php echo $exibir_barb['Barbeiro_Skill'];?>" class="form-control">
                                                    <small class="form-text text-muted"> </small>
                                                </div>
                                            </div>
											
											<center> <img style="margin-bottom:10px;" width="300" src="../img/team/<?php echo $exibir_barb['Barbeiro_Imagem'];?>"> </center>
											
											
											<input type="hidden" name="imagem" value="<?php echo $exibir_barb['Barbeiro_Imagem'];?>">
											<input type="hidden" name="bid" value="<?php echo $exibir_barb['Barbeiro_Codigo'];?>">											
                                            
											
										  
										<div class="card-footer">  
										 <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Editar
										</button> 
										</div>
                                        </form>
                                    </div>
									
									
									
							
                                </div>
							</div>	

							<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Editar Imagem </strong> 
                                    </div>
									
                                    <div class="card-body card-block">
                                        <form action="barbeiropost/editarimagembarb.php" method="POST" enctype="multipart/form-data" class="form-horizontal">                            
											<input type="hidden" name="bid" value="<?php echo $exibir_barb['Barbeiro_Codigo'];?>">
											<input type="hidden" name="imagem" value="<?php echo $exibir_barb['Barbeiro_Imagem'];?>">	
											
                                            <div class="row form-group">
											
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Alterar Imagem</label>
                                                </div>
												
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="arquivo" class="form-control-file">
													<small class="form-text text-muted">Não é obrigatório mudar a imagem. Se quiser a mesma, apenas não selecione nada. O tamanho será ajustado para 350x438.</small>
                                                </div>
											</div>
											
                                            <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Enviar
											</button>
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
							<?php }; ?>
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
