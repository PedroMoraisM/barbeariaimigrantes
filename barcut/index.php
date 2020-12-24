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
	<section class="home-banner-area relative">
	
		<div class="owl-carousel home-banner-owl">
		<?php 
		$query_img2 = mysqli_query($conexao,"SELECT * FROM imagens LIMIT 2,4");
		while($exibir_img2=mysqli_fetch_array($query_img2)){
		?>
			<div class="banner-img">
				<img class="img-fluid" src="img/banner/<?php echo $exibir_img2['Imagem_Nome'];?>" alt="">
				<div class="overlay overlay-bg"></div>
			</div>
		<?php }; ?>	
		</div>

		<div class="text-wrapper">
			<h1>
				<?php 
				$query_txt1 = mysqli_query($conexao,"SELECT * FROM textos WHERE Texto_Codigo = 1");
				while($exibetxt1 = mysqli_fetch_array($query_txt1)) {
					echo $exibetxt1['Texto_Titulo'];
				};
				?>
				
			</h1>
			<p>
				
			</p>
			<div class="text-center">
				<a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=nf5_63t0UbI">
					<span></span>
				</a>
			</div>
			<div class="video-text">
				<p>Confira nosso trabalho</p>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!--================ Start About Area =================-->
	<section class="section-gap-top about-area">
		<div class="container">
			<div class="single-about row align-items-center">
				<div class="col-lg-4 col-md-6 no-padding about-left">
					<div class="about-content">
				<?php 
				$query_txt2 = mysqli_query($conexao,"SELECT * FROM textos WHERE Texto_Codigo = 2");
				while($exibetxt2 = mysqli_fetch_array($query_txt2)) {				
				?>
						<h1 style="margin-left:15px;"><?php echo $exibetxt2['Texto_Titulo']; ?></h1>
						
						<p style="margin-left:15px;"><?php echo $exibetxt2['Texto_Corpo']; ?></p>
				<?php }; ?>			
						<a style="margin-left:20px;" href="sobre.php" class="primary-btn">Leia Mais</a>
					</div>
				</div>
				<?php 
				$queryImg = mysqli_query($conexao,"SELECT * FROM imagens WHERE Imagem_Codigo = 1");
				while($exibeimg = mysqli_fetch_array($queryImg)) {
				?>
				<div class="col-lg-7 col-md-6 text-center no-padding about-right">
					<div class="about-thumb">
						<img src="img/index/<?php echo $exibeimg['Imagem_Nome'];?>" class="img-fluid info-img" alt="">
					</div>
				</div>
				<?php }; ?>
				<?php 
				$queryImg2 = mysqli_query($conexao,"SELECT * FROM imagens WHERE Imagem_Codigo = 2");
				while($exibeimg2 = mysqli_fetch_array($queryImg2)) {
				?>
				<div class="bordered-img">
					<img src="img/index/<?php echo $exibeimg2['Imagem_Nome'];?>" width="400" class="img-fluid info-img" alt="">
				</div>
				<?php }; ?>
			</div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Service Area =================-->
	<section class="service-area section-gap" style="padding-bottom: 40px;" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center">
					<div class="section-title">
						<?php 
					$querytxt12 =  mysqli_query($conexao,"SELECT * FROM textos WHERE Texto_Codigo = 12");
					while($exibetxt12=mysqli_fetch_array($querytxt12)) {
					?>
						<h1><?php echo $exibetxt12['Texto_Titulo'];?></h1>
						<p><?php echo $exibetxt12['Texto_Corpo'];?></p>
					<?php }; ?>
					</div>
				</div>
			</div>
			<div class="row">
			<?php 
			$query_servindex = mysqli_query($conexao,"SELECT * FROM servicos_index");
			while($exibeserv = mysqli_fetch_array($query_servindex)) {				
			?>
				<div class="col-lg-3 col-sm-6 col-md-3">
					<div class="single-service">
						<img class="img-fluid" src="img/service/<?php echo $exibeserv['Servico_Imagem']; ?>" alt="">
						<h4><?php echo $exibeserv['Servico_Nome']; ?></h4>
					</div>
				</div>
			<?php }; ?>					
			</div>
		</div>
	</section>
	<!--================ End Service Area =================-->

	

	<!--================ Start Team Area =================-->
	<section class="team-area section-gap2">
		<div class="container">
		<center>
			<div class="row justify-content-center">
				<div class="col-md-8 text-center">
					<div class="section-title2">
						<h1>BARBEIROS</h1><br>
						<p>Confira todos os profissionais na página <a href="barbers.php" style="text-decoration:none;color:inherit;"> Barbeiros</a> </p>
					</div>
				</div>
			</div>
			<div class="rowteam">
				<!-- single member -->
				<div class="col-lg-4 col-md-4">
					<div class="single-team-member">
						<div class="member-img">							
							 <img class="img-fluid" src="img/team/andre.png" alt=""> 							
						</div>

						<div class="proff">
							<h4>André Zezilia</h4>
							<p>Especialista em Design de  Cabelo e Barba</p>
						</div>
					</div>
				</div>				
			</div>
			</center>
		</div>
	</section>
	<!--================ End Team Area =================-->

	<!--================Testimonials Area =================-->
	<section class="testimonials-area section-gap-top">
			
			<div class="text-center">			
				<h2><font color="#fff"> Bom demais pra ser verdade? Confira a opnião de nossos clientes: </font> </h2>
			</div>
			
		<div class="overlay overlay-bg"></div>
		<div class="container">
			
			<div class="testi-slider owl-carousel" data-slider-id="1">
			
			<?php 
			
			$busca_avaliacao = mysqli_query($conexao,"SELECT * FROM avaliacoes");
			while($exibe_avaliacao=mysqli_fetch_array($busca_avaliacao)){
			?>
				<div class="item">
					<div class="testi-item">
						<h4><?php echo $exibe_avaliacao['Rate_Autor'];?></h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								<?php echo $exibe_avaliacao['Rate_Corpo'];?>
							</p>
						</div>
					</div>
				</div>
				
			<?php }; ?>
				
				
			</div>
			
			<!-- IMAGENS AVALIADORES 
			<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid" src="img/testimonial/t1.png" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid" src="img/testimonial/t2.png" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid" src="img/testimonial/t3.png" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid" src="img/testimonial/t4.png" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
			</div>
			-->
			
			
		</div>
	</section>
	<!--================End Testimonials Area =================-->

	<!--================ Start Blog Area =================-->
	<div class="blog-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="section-title">
						<h1>Novidades do Blog</h1>
						<p>Confira os post mais recentes do nosso blog, contendo dicas, cortes e mais! </p>
					</div>
				</div>
			</div>
			
			
			<div class="row">
			
			<?php 
						
							$busca_blog = mysqli_query($conexao,"SELECT * FROM blog ORDER BY Blog_Codigo DESC LIMIT 4");
							while($exibe_blog = mysqli_fetch_array($busca_blog)) {
						?>
				<div class="col-lg-6 mb-30">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="single-blog">
								<div class="row align-items-center">
									<div class="col-lg-4 col-md-4">
										<div class="blog-thumb">
											<img src="img/blog/<?php echo $exibe_blog['Blog_Imagem'];?>" width="165" height="170" alt="">
										</div>
									</div>
									<div class="col-lg-8 col-md-8">
										<div class="blog-details">
											
											<h4><a class="blog-title" href="#"><?php echo $exibe_blog['Blog_Titulo'];?></a></h4>
											<p><?php echo substr($exibe_blog['Blog_Corpo'],0,40);?> [...]</p>
											<div class="blog-meta">
												<a href="#"><i class="fa fa-calendar"></i><?php echo $exibe_blog['Blog_Data'];?></a>
												<a href="blog-unico.php?bid=<?php echo $exibe_blog['Blog_Codigo'];?>" class="genric-btn primary small" style="border-radius:3px;padding-right:30px;"><font color="#fff">Conferir</font></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<?php }; ?>
			</div>
			
			
			
		</div>
	</div>
	<!--================ End Events Area =================-->

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