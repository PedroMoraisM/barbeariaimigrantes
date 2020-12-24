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
    <title>Textos</title>

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
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">	
								<center> <h3> Página Home - Texto </h3> </center> <br>
                                    <table class="table table-borderless table-striped table-earning" width="100%">
                                        <thead>
                                            <tr>                                                
                                                <th>Descrição</th>
                                                <th>Título</th>
                                                <th>Corpo</th>                                        
                                                <th>Opções</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$query_texto = mysqli_query($conexao,"SELECT * FROM textos WHERE Texto_Codigo = 1;");
										while($exibir_texto=mysqli_fetch_array($query_texto)){
										?>
                                            <tr>
                                                <td><?php echo $exibir_texto['Texto_Descricao'];?>     </td>
                                                <td><?php echo $exibir_texto['Texto_Titulo'];?>	 </td>
                                                <td><?php echo substr($exibir_texto['Texto_Corpo'],0,30);?> [...]   </td>                                
                                             
                                                <td> 												
													<div class="table-data-feature">  
													
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <a href="editartextos.php?tid=<?php echo $exibir_texto['Texto_Codigo'];?>" > <i class="zmdi zmdi-edit"> </i> </a>
                                                        </button>
													</div>
												</td>
                                                
                                            </tr>
                                         <?php 
										 };
										 ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
							
							
							<div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">	
								<center> <h3> Página Home - Imagens do Banner</h3> </center> <br>
                                    <table class="table table-borderless table-striped table-earning" width="100%">
                                        <thead>
                                            <tr>                                                
                                                <th>Descrição</th>
                                                <th>Imagem</th>
                                                                                       
                                                <th>Opções</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$query_img2 = mysqli_query($conexao,"SELECT * FROM imagens LIMIT 2,4");
										while($exibir_img2=mysqli_fetch_array($query_img2)){
										?>
                                            <tr>
                                                <td><?php echo $exibir_img2['Imagem_Obs'];?>     </td>
                                                <td><img width="200" height="100" src="../img/banner/<?php echo $exibir_img2['Imagem_Nome'];?>"/> </td>
                                                                              
                                             
                                                <td> 												
													<div class="table-data-feature">  
													
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <a href="editarbanner.php?tid=<?php echo $exibir_img2['Imagem_Codigo'];?>" > <i class="zmdi zmdi-edit"> </i> </a>
                                                        </button>
													</div>
												</td>
                                                
                                            </tr>
                                         <?php 
										 };
										 ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
							
							<div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">	
								<center> <h3> Página Home & Sobre Nós - Imagens da Caixa e Texto</h3> </center> <br>
                                    <table class="table table-borderless table-striped table-earning" width="100%">
                                        <thead>
                                            <tr>                                                
                                                <th>Posição</th>
                                                <th>Imagem</th>                                                                                      
                                                <th>Opções</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$query_img = mysqli_query($conexao,"SELECT * FROM imagens LIMIT 0,2;");
										while($exibir_img=mysqli_fetch_array($query_img)){
										?>
                                            <tr>                                               
                                                <td><?php echo $exibir_img['Imagem_Obs'];?>	 </td>
                                                <td><img width="100" height="200" src="../img/index/<?php echo $exibir_img['Imagem_Nome'];?>"> </td>
                                                <td> 												
													<div class="table-data-feature">  
													
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <a href="editarimg.php?sid=<?php echo $exibir_img['Imagem_Codigo'];?>" > <i class="zmdi zmdi-edit"> </i> </a>
                                                        </button>
													</div>
												</td>
                                                
                                            </tr>
                                         <?php 
										 };
										 ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							<div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">	
								<center> <h3> Página Home - Serviços Oferecidos</h3> </center> <br>
                                    <table class="table table-borderless table-striped table-earning" width="100%">
                                        <thead>
                                            <tr>                                                
                                                <th>Nome</th>
                                                <th>Imagem</th>                                                                                      
                                                <th>Opções</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$query_serv = mysqli_query($conexao,"SELECT * FROM servicos_index;");
										while($exibir_serv=mysqli_fetch_array($query_serv)){
										?>
                                            <tr>                                               
                                                <td><?php echo $exibir_serv['Servico_Nome'];?>	 </td>
                                                <td><img width="100" height="200" src="../img/service/<?php echo $exibir_serv['Servico_Imagem'];?>"> </td>
                                                <td> 												
													<div class="table-data-feature">  
													
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <a href="editarservindex.php?sid=<?php echo $exibir_serv['Servico_Codigo'];?>" > <i class="zmdi zmdi-edit"> </i> </a>
                                                        </button>
													</div>
												</td>
                                                
                                            </tr>
                                         <?php 
										 };
										 ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							<div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">	
								<center> <h3> Página Sobre Nós </h3> </center> <br>
                                    <table class="table table-borderless table-striped table-earning" width="100%">
                                        <thead>
                                            <tr>                                                
                                                <th>Descrição</th>
                                                <th>Título</th>
                                                <th>Corpo</th>                                                
                                                <th>Imagem</th>
                                                <th>Opções</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$query_texto = mysqli_query($conexao,"SELECT * FROM textos LIMIT 1,6;");
										while($exibir_texto=mysqli_fetch_array($query_texto)){
										?>
                                            <tr>
                                                <td><?php echo $exibir_texto['Texto_Descricao'];?>     </td>
                                                <td><?php echo $exibir_texto['Texto_Titulo'];?>	 </td>
                                                <td><?php echo substr($exibir_texto['Texto_Corpo'],0,30);?> [...]   </td>                                    
                                                <td><?php if($exibir_texto['Texto_Imagem']==null){ 
												echo " Não tem </td>"; } else {
													
												echo "<img width='200' src='../img/".$exibir_texto['Texto_Imagem']."' width='150'>";}
												?>		
												
                                                <td> 												
													<div class="table-data-feature">  
													
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <a href="editartextos.php?tid=<?php echo $exibir_texto['Texto_Codigo'];?>" > <i class="zmdi zmdi-edit"> </i> </a>
                                                        </button>                                           
														
                                                    </div>
												</td>
                                                
                                            </tr>
                                         <?php 
										 };
										 ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>

							<div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">	
								<center> <h3> Cabeçalhos </h3> </center> <br>
                                    <table class="table table-borderless table-striped table-earning" width="100%">
                                        <thead>
                                            <tr>                                                
                                                <th>Descrição</th>
                                                <th>Título</th>
                                                <th>Corpo</th>                                        
                                                <th>Opções</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$query_texto = mysqli_query($conexao,"SELECT * FROM textos LIMIT 7,10;");
										while($exibir_texto=mysqli_fetch_array($query_texto)){
										?>
                                            <tr>
                                                <td><?php echo $exibir_texto['Texto_Descricao'];?>     </td>
                                                <td><?php echo $exibir_texto['Texto_Titulo'];?>	 </td>
                                                <td><?php echo substr($exibir_texto['Texto_Corpo'],0,40);?> [...]   </td>                                
                                             
                                                <td> 												
													<div class="table-data-feature">  
													
                                                        <button  class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <a href="editartextos.php?tid=<?php echo $exibir_texto['Texto_Codigo'];?>" > <i class="zmdi zmdi-edit"> </i> </a>
                                                        </button>
													</div>
												</td>
                                                
                                            </tr>
                                         <?php 
										 };
										 ?>   
                                        </tbody>
                                    </table>
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
