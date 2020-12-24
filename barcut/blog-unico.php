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
			<div class="breadcrmb">
				<p>
					<a href="index.php">home</a>
					<span class="lnr lnr-arrow-right"></span>
					<a href="blog-home.php">Blog</a>										
				</p>
			</div>
			<h1>Blog </h1>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
				<?php 
				$blogcod = $_GET['bid'];
				
				$query_blog = mysqli_query($conexao,"SELECT * FROM blog WHERE Blog_codigo = $blogcod");
				while($exibe_blog = mysqli_fetch_array($query_blog)) {
				
				?>
					<div class="single-post row">						
						<div class="col-lg-3  col-md-3 meta-details">
							
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $exibe_blog['Blog_Autor'];?></a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $exibe_blog['Blog_Data'];?></a> <span class="lnr lnr-calendar-full"></span></p>						
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-9">
							<h3 class="mt-20 mb-20"><?php echo $exibe_blog['Blog_Titulo'];?></h3>
							<p class="excert">
								<?php echo $exibe_blog['Blog_Corpo'];?>	
							</p>
						
						</div>
						
					</div>
					<?php }; ?>
					
					<!-- comments -->
					
					<div class="comments-area">
					<?php 
						$queryNumber = mysqli_query($conexao,"SELECT COUNT(Comentario_Codigo) as Numero FROM comentarios WHERE Comentario_Blog = $blogcod;");
						while($exibeNumber=mysqli_fetch_array($queryNumber)){
						?>
						<h4><?php echo $exibeNumber['Numero'];}?> Comentários</h4>
						
						<?php 
						$query_comentario = mysqli_query($conexao,"SELECT * FROM comentarios WHERE Comentario_Blog = $blogcod;");
						while($exibe_comentario=mysqli_fetch_array($query_comentario)){
						?>
						<div class="comment-list">
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img width="50" src="img/blog/user.png" alt="">
									</div>
									<div class="desc">
										<h5><a href="#"><?php echo $exibe_comentario['Comentario_Nome'];?></a></h5>
										<p class="date"><?php echo $exibe_comentario['Comentario_Data'];?></p>
										<p class="comment">
											<?php echo $exibe_comentario['Comentario_Corpo'];?>
										</p>
									</div>
								</div>						
							</div>
						</div>			
						<?php }; ?>	
					</div>
					
					<!-- comments -->
					<div class="comment-form">
						<h4>Deixe um comentário</h4>
						<form action="cms/addcomentario.php" method="POST">
							<div class="form-group form-inline">
								<div class="form-group col-lg-6 col-md-12 name">
									<input type="text" class="form-control" name="nome" placeholder="Insira seu Nome" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Nome'">
								</div>
								<div class="form-group col-lg-6 col-md-12 email">
									<input type="email" class="form-control" name="email" placeholder="Insira seu Email" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Email'">
								</div>
							</div>							
							<div class="form-group">
								<textarea class="form-control mb-10" rows="5" name="corpo" placeholder="Escreva o Comentário" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Comentário...'" required=""></textarea>
							</div>
							
							<input type="hidden" value="<?php echo $_GET['bid'];?>" name="bid">
							
							<button class="primary-btn"> Enviar </button>
						</form>
					</div>
				</div>
				
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
					<?php 
				$blogcod = $_GET['bid'];
				
				$query_blog1 = mysqli_query($conexao,"SELECT Blog_Imagem FROM blog WHERE Blog_codigo = $blogcod");
				while($exibe_blog1 = mysqli_fetch_array($query_blog1)) {
				
				?>
						<img class="img-fluid" src="img/blog/<?php echo $exibe_blog1['Blog_Imagem'];?>" alt="">				
						
				<?php }; ?>		
					
						
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