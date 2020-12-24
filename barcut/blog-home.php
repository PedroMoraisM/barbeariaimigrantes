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

	

	<!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90" id="menu_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/top1.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Dicas</h4>
									<span></span>
									<p>Saiba como cuidar melhor <br> da sua aparência</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/top2.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Cabelo</h4>
									<span></span>
									<p>Fique por dentro dos cortes tendência</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/top3.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Barba</h4>
									<span></span>
									<p>Aprenda como manter sua <br> barba bem tratada</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-category-widget Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
				
				<?php 
				
				
				$total_reg = "3";
				
				$pagina=$_GET['pagina'];
				if (!$pagina) {
				 $pc = "1";
				} else {
				 $pc = $pagina;
				}
				
				 $inicio = $pc - 1;
				 $inicio = $inicio * $total_reg;
				
				$busca_blog = "SELECT * FROM blog ORDER BY Blog_Codigo";
				
				$limite = mysqli_query($conexao,"$busca_blog LIMIT $inicio,$total_reg");
				$todos = mysqli_query($conexao,"$busca_blog");
				
				$tr = mysqli_num_rows($todos); // verifica o número total de registros
				$tp = $tr / $total_reg; // verifica o número total de páginas				
				
				
				while($exibe_blog = mysqli_fetch_array($limite)) {
				
				?>
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $exibe_blog['Blog_Autor'];?></a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $exibe_blog['Blog_Data'];?></a> <span class="lnr lnr-calendar-full"></span></p>
								<!-- 
								<p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p> -->								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-9 ">
							
							<a class="posts-title" href="blog-unico.php?bid=<?php echo $exibe_blog['Blog_Codigo']; ?>">
								<h3><?php echo $exibe_blog['Blog_Titulo'];?></h3>
							</a>
							<p class="excert">
								<?php echo substr($exibe_blog['Blog_Corpo'],0,120)?> [...]
							</p>
							<div class="feature-img">
								<img class="img-fluid" src="img/blog/<?php echo $exibe_blog['Blog_Imagem'];?>" alt="">
							</div>
							<br>
							<a href="blog-unico.php?bid=<?php echo $exibe_blog['Blog_Codigo']; ?>" style="float:right;" class="genric-btn primary radius">Ler Tudo</a>
						</div>
						
						
					</div>
					
					<?php }; ?>					
					
					
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
						
						
						<?php 
						ceil($tp);
						
							$anterior = $pc -1;
							$proximo = $pc +1;
							
							if ($pc>1) {
							echo " 
							<li class='page-item'>
								<a href='blog-home.php?pagina=$anterior' class='page-link' aria-label='Previous'>
									<span aria-hidden='true'>
										<span class='lnr lnr-chevron-left'></span>
									</span>
								</a>
							</li> "	;								
							}							
							
								$i = 1;
							while($i<=ceil($tp)){
								
								echo " <li class='page-item'><a href='blog-home.php?pagina=$i' class='page-link'> $i </a></li> " ;
								$i++;
							}						
							
							if ($pc<$tp) {
							echo " <li class='page-item'>
							
								<a href='blog-home.php?pagina=$proximo' class='page-link' aria-label='Next'>
									<span aria-hidden='true'>
										<span class='lnr lnr-chevron-right'></span>
									</span>
								</a>
							</li> ";
							}				
							
							
						?>						
							
							
							
						</ul>
					</nav>
					
					
					
				</div>
				
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						
						<div class="single-sidebar-widget user-info-widget">
							<img src="img/blog/user.png" alt="">
							<a href="#">
								<h4>André Zezilia</h4>
							</a>
							<p>
								Redator e Fundador da Barbearia
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								
							</ul>
							<p>
								
							</p>
						</div>			
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End post-content Area -->

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