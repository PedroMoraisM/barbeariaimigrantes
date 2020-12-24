<!DOCTYPE html>
<html lang="zxx" class="no-js">

<?php 
include("conexao.php");  

 
?>


<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Barbearia Imigrantes</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Roboto:400,500,500i" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/availability-calendar.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="icon" type="image/x-icon" href="img/iconbarb.ico" />
</head>

<body>

	<!--================ Start Header Area =================-->
	<?php 
	
	include("menu.php");
	
	?>
	<!--================ End Header Area =================-->

	<!--================ Start banner Area =================-->
	<section class="banner-area relative">
		<div class="banner-img">
			<img class="img-fluid" src="img/banner/banner-bg.jpg" alt="">
			<div class="overlay overlay-bg"></div>
		</div>
		<div class="banner-content text-center">
			
			<h1>Galeria</h1>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!--================ Start Gallery Area =================-->
	<section class="gallery-area" id="gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center">
					<div class="section-title">
						<?php 
					$querytxt9 =  mysqli_query($conexao,"SELECT * FROM textos WHERE Texto_Codigo = 9");
					while($exibetxt9=mysqli_fetch_array($querytxt9)) {
					?>
						<h1><?php echo $exibetxt9['Texto_Titulo'];?></h1>
						<p><?php echo $exibetxt9['Texto_Corpo'];?></p>
					<?php }; ?>
					</div>
				</div>
			</div>
			
			<div class="filters-content">
				<div class="row grid">
				
				<?php 
				
				$total_reg = "9";
				
				$pagina=$_GET['pagina'];
				if (!$pagina) {
				 $pc = "1";
				} else {
				 $pc = $pagina;
				}
				
				 $inicio = $pc - 1;
				 $inicio = $inicio * $total_reg;
				
				$busca_imagem = "SELECT * FROM imagens_galeria";
				
				$limite = mysqli_query($conexao,"$busca_imagem LIMIT $inicio,$total_reg");
				$todos = mysqli_query($conexao,"$busca_imagem");
				
				$tr = mysqli_num_rows($todos); // verifica o número total de registros
				$tp = $tr / $total_reg; // verifica o número total de páginas
				
				while($exibe_imagem = mysqli_fetch_array($limite)) {
				?>
					<div class="single-gallery col-lg-4 col-md-6 all">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid2" src="img/gallery/<?php echo $exibe_imagem["Galeria_Nome"]; ?>" alt="">
							</div>
							
						</div>
					</div>
					
				<?php }; ?>	
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	
	<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
						
						
						<?php 
						ceil($tp);
						
							$anterior = $pc -1;
							$proximo = $pc +1;
							
							if ($pc>1) {
							echo " 
							<li class='page-item'>
								<a href='galeria.php?pagina=$anterior' class='page-link' aria-label='Previous'>
									<span aria-hidden='true'>
										<span class='lnr lnr-chevron-left'></span>
									</span>
								</a>
							</li> "	;								
							}							
							
								$i = 1;
							while($i<=ceil($tp)){
								
								echo " <li class='page-item'><a href='galeria.php?pagina=$i' class='page-link'> $i </a></li> " ;
								$i++;
							}						
							
							if ($pc<$tp) {
							echo " <li class='page-item'>
							
								<a href='galeria.php?pagina=$proximo' class='page-link' aria-label='Next'>
									<span aria-hidden='true'>
										<span class='lnr lnr-chevron-right'></span>
									</span>
								</a>
							</li> ";
							}

							
							
							
						?>						
							
							
							
						</ul>
					</nav>
	
	
	
	<!--================Start Gallery Area =================-->

	<!--================ Start Footer Area =================-->
	<?php 
	include("footer.php");
	?>
	<!--================ End Footer Area =================-->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.tabs.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/main.js"></script>
</body>

</html>