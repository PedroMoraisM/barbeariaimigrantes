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
			<div class="breadcrmb">
				<p>
					<a href="index.php">home</a>
					<span class="lnr lnr-arrow-right"></span>
					<a href="barbers.php">Barbeiros</a>
				</p>
			</div>
			<h1>Barbeiros</h1>
		</div>
	</section>
	<!--================ End banner Area =================-->

	
	<!--================ Start Team Area ================= -->
	<section class="team-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center">
					<div class="section-title">
					<?php 
					$querytxt8 =  mysqli_query($conexao,"SELECT * FROM textos WHERE Texto_Codigo = 8");
					while($exibetxt8=mysqli_fetch_array($querytxt8)) {
					?>
						<h1><?php echo $exibetxt8['Texto_Titulo'];?></h1>
						<p><?php echo $exibetxt8['Texto_Corpo'];?></p>
					<?php }; ?>
					</div>
				</div>
			</div>
			<div class="row">
			
			<?php 
			$query_barber =  mysqli_query($conexao,"SELECT * FROM barbeiros ORDER BY Barbeiro_Codigo ASC");
			while($exibe_b=mysqli_fetch_array($query_barber)) {
			?>
				<!-- single member -->
				<div class="col-lg-4 col-md-4">
					<div class="single-team-member">
						<div class="member-img">
							<img class="img-fluid" style="width:350px;height:438px;" src="img/team/<?php echo $exibe_b['Barbeiro_Imagem'];?>" alt="">
						</div>

						<div class="proff">
							<h4><?php echo $exibe_b['Barbeiro_Nome'];?></h4>
							<p><?php echo $exibe_b['Barbeiro_Skill'];?></p>
						</div>
					</div>
				</div>
				
			<?php }; ?>
				
			</div>
			
				

			
		</div>
	</section>
	
	
	
	<!--================ End Team Area =================-->

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