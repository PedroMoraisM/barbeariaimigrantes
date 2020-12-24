<!DOCTYPE html>
<html lang="zxx" class="no-js">

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
					<a href="contato.php">Contato</a>
				</p>
			</div>
			<h1>Contato</h1>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
			<style>
			@media (max-width: 911px){
					iframe {
						width: 100%;
						margin-left: 5px;
					}
					
				}
			</style>
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1523.8012995869492!2d-47.88571334220123!3d-24.718959063082362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dac57765740d21%3A0xb2e8d2eed3d6df51!2sBarbearia+Imigrantes+-+Barbearia+-corte+de+cabelo+masculino+e+infantil!5e0!3m2!1spt-BR!2sbr!4v1565395846127!5m2!1spt-BR!2sbr" width="1140" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
			
				
			
				
				<div class="col-lg-4 d-flex flex-column address-wrap" style="padding-top:20px;">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Pariquera-Açu, São Paulo</h5>
							<p>
								Rua Lauro Lobo, 29, Jardim das Acácias 
							</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>(13) 99609-9260</h5>
							<p>Seg a sáb, das 9h as 21h.</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5>barbeariaimigrantes@gmail.com</h5>							
						</div>
					</div>
				</div>
				
				<div class="col-lg-8" style="padding-top:20px;">
					<form class="form-area contact-form text-right" action="cms/enviarmsg.php" method="POST">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="nome" placeholder="Insira seu nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira seu nome'"
								 class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder="Insira seu email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira seu email'" class="common-input mb-20 form-control"
								 required="" type="email">

								<input name="assunto" placeholder="Insira o assunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira o assunto'"
								 class="common-input mb-20 form-control" required="" type="text">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="mensagem" placeholder="Escreva aqui" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Escreva aqui'" required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align:left;"></div>
								<button class="primary-btn text-uppercase" style="float: right;">Enviar</button>
							</div>
						</div>
					</form>
				</div>
				
			 
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

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