<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Noticias</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../Assets/template1/assets/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../Assets/template1/venobox/venobox.css">
	<link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/plugin_theme_css.css">
	<link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/responsive.css">

</head>

<body>
	<div class="em40_header_area_main">
		<!-- HEADER TOP AREA -->
		<div class="solutech-header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-9 col-xl-9 col-md-9 col-sm-12">
						<div class="top-address text-left">
							<p>
								<span><i class="fas fa-home"></i>7ª. Av. Norte entre 23 y 27 calle poniente, San
									Salvador</span>
								<a href="#"><i class="fas fa-phone-alt"></i>+503 7069 9148</a>
								<a href="#"><i class="fas fa-envelope"></i>domingo.savio@salesianosds.com</a>
							</p>
						</div>
					</div>
					<!-- TOP RIGHT -->
					<div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
						<div class="top-right-menu">
							<ul class="social-icons text-right text_m_center">
								<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END HEADER TOP AREA -->
		<div class="tx_top2_relative">
			<div class="">
				<div class="tx_relative_m">
					<div class="">
						<div class="mainmenu_width_tx  ">
							<div class="solutech-main-menu one_page hidden-xs hidden-sm witr_h_h10">
								<div class="solutech_nav_area scroll_fixed postfix">
									<div class="container">
										<div class="row logo-left">
											<!-- LOGO -->
											<div class="col-md-3 col-sm-3 col-xs-4">
												<div class="logo">
													<a class="main_sticky_main_l" title="solutech">
														<img src="../../Assets/template1/assets/images/logo.png"
															alt="solutech">
													</a>
													<a class="main_sticky_l" title="solutech">
														<img src="../../Assets/template1/assets/images/logo2.png"
															alt="solutech">
													</a>
												</div>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-8">
												<nav class="solutech_menu main-search-menu">
													<ul class="sub-menu">
														<li><a href="index.php">Inicio</a></li>
														<li><a href="news.php">Noticias</a></li>
														<li><a href="#seccion4">Acerca de Nosotros</a></li>
														<li><a href="admisiones.php">Admisiones</a></li>
														<li><a href="contactus.php">Contactanos</a></li>
													</ul>
													<div class="donate-btn-header">
														<a class="dtbtn"
															href="../login-register/login/Login.php">Iniciar Sesión </a>
													</div>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!-- MOBILE MENU Logo AREA -->
	<div class="mobile_logo_area hidden-md hidden-lg">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="mobile_menu_logo text-center">
						<a href="index.html" title="solutech">
							<img src="../../Assets/template1/assets/images/logo.png" alt="solutech">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MOBILE MENU AREA -->
	<div class="home-2 mbm hidden-md hidden-lg  header_area main-menu-area">
		<div class="menu_area mobile-menu">
			<nav class="solutech_menu">
				<ul class="sub-menu">
					<li class="menu-item-has-children">
						<a href="#">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Home Page</a></li>
							<li><a href="index-2.html">Landing Page</a></li>
							<li><a href="index-3.html">Home Banner Page</a></li>
						</ul>
					</li>
					<li><a href="about.html">About</a></li>
					<li class="menu-item-has-children">
						<a href="#">Service</a>
						<ul class="sub-menu">
							<li><a href="home-security.html">Home Security</a></li>
							<li><a href="software-development.html">Software Development</a></li>
							<li><a href="installation.html">Installation CCTV</a></li>
							<li><a href="service-details.html">Service Details</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="pricing-plan.html">Pricing Plan</a></li>
							<li><a href="why-choose-us.html">Why Choose Us</a></li>
							<li><a href="faq.html">FAQ’S</a></li>
							<li class="menu-item-has-children">
								<a href="#">Portfolio</a>
								<ul class="sub-menu">
									<li><a href="portfolio-2column.html">Portfolio 2Column</a></li>
									<li><a href="portfolio-3column.html">Portfolio 3Column</a></li>
									<li><a href="portfolio-4column.html">Portfolio 4Column</a></li>
								</ul>
							</li>
							<li><a href="team.html">Team</a></li>
							<li><a href="testimonial.html">Testimonial</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="#">News</a>
						<ul class="sub-menu">
							<li><a href="blog.html">Blog Grid</a></li>
							<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
							<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- END MOBILE MENU AREA  -->


	<!-- breadcumb-area -->
	<div class="breadcumb-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 txtc  text-center ccase">
					<div class="brpt">
						<h2>Blog</h2>
					</div>
					<div class="breadcumb-inner">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><i class="fas fa-angle-right"></i></li>
							<li>Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- solutech_blog_area  -->
	<div class="solutech_blog2_area blog_page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-center">
							<h2>Noticias</h2>
							<h3>Nuestra Noticias</h3>
							<h1>Noticas más recientes y blog

							</h1>
						</div>
					</div>
				</div>
			</div>
			<?php
			$conn = require "../../funcs/conexion.php";
			$resultado = $conn->query("SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 0");
			$i = $resultado->fetch_all(MYSQLI_ASSOC);

			?>

			<div class="bgimgload">
				<div class="row blog-messonary blog_top">
					<!-- NOTICIAS  -->
					<?php
					foreach ($i as $data) { ?>
						<div class="witr_nth_child col-lg-4  col-md-6 col-sm-8 grid-item   witr_all_mb_30">
							<div class="blog-part all_blog_color">
								<div class="blog_part_inner">
									<div class="witr_blog_imags">
										<div class="blog-img">
											<a href="#"><img src="<?php echo $data["imagen"]; ?>" alt="image"> </a>
										</div>
									</div>
									<div class="wblog-content blog-content-2 all_blog_color">
										<!-- <span><a href="#"><i class="fas fa-user"></i> Solutech </a></span>
										<span><i class="icofont-tags"></i><a href="#">Antivirus app</a></span> -->
										<h5><a href="single-blog.html"><?php echo $data["titulo"]; ?></a>
										</h5>
										<p><?php echo $data["contenido"]; ?></p>
										<!-- <a class="btn2" href="#">Read More</a> -->
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- witrfm_footer_area -->
	<div class="witrfm_area">
		<div class="footer-middle">
			<div class="container">
				<div class="row">
					<div class=" col-lg-3 col-md-6 col-sm-12">
						<div class="widget widget_solutech_description_widget">
							<div class="solutech-description-area">
								<a href="#"><img src="../../Assets/template1/assets/images/logo2.png" alt="image"></a>
								<p>La Escuela Domingo Savio, fundada en 1985, forma generaciones con el sistema
									preventivo de Don Bosco, guiada por las Hijas del Divino Salvador, con compromiso
									educativo y valores salesianos.</p>
								<div class="social-icons">
									<a href="#"><i class="fa fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-x-twitter"></i></a>
									<a href="#"><i class="fas fa-rss"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class=" col-lg-3 col-md-6 col-sm-12">

					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="widget about_us">
							<h2 class="widget-title">Dirección Local</h2>
							<div class="about-footer">
								<div class="footer-widget address">
									<div class="footer-logo">
										<p>Estamos ubicados en el corazón de San Salvador para servirle mejor.</p>
									</div>
									<div class="footer-address">
										<div class="footer_s_inner">
											<div class="footer-sociala-icon">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="footer-sociala-info">
												<p>Dirección: 7ª Av. Norte entre 23 y 27 calle poniente, San Salvador
												</p>
											</div>
										</div>
										<div class="footer_s_inner">
											<div class="footer-sociala-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="footer-sociala-info">
												<p>Teléfono: +503 7069 9148</p>
											</div>
										</div>
										<div class="footer_s_inner">
											<div class="footer-sociala-icon">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="footer-sociala-info">
												<p>Email: domingo.savio@salesianosds.com</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="col-sm-12 col-md-6 col-lg-3 last">
						<div class="widget_text widget widget_custom_html">
							<h2 class="widget-title">Horario de Atención</h2>
							<div class="textwidget custom-html-widget">
								<div class="witr_table">
									<div class="witr_sub_table">
										<span>Martes - Viernes</span>
										<span>07:00 - 16:00</span>
									</div>
									<div class="witr_sub_table">
										<span>Sábado</span>
										<span>07:00 - 12:00</span>
									</div>
									<div class="witr_sub_table">
										<span>Domingo</span>
										<span>09:00 - 18:00</span>
									</div>
									<div class="witr_sub_table">
										<span>Lunes</span>
										<span>09:00 - 18:00</span>
									</div>
									<div class="witr_sub_table">
										<span>Emergencias:</span>
										<span>(+099) 020 768 69</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6  col-sm-12">
						<div class="copy-right-text">
							<p>Copyright &copy; domingo savio all rights reserved.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6  col-sm-12">
						<div class="footer-menu">
							<ul class="text-right">
								<li><a href="#">Inicio</a></li>
								<li><a href="#">Admiciones</a></li>
								<li><a href="#">Noticias</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Include All JS -->
	<script src="../../Assets/template1/assets/js/vendor/jquery-3.5.1.min.js"></script>
	<script src="../../Assets/template1/assets/js/bootstrap.min.js"></script>
	<script src="../../Assets/template1/assets/js/isotope.pkgd.min.js"></script>
	<script src="../../Assets/template1/assets/js/slick.min.js"></script>
	<script src="../../Assets/template1/assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="../../Assets/template1/venobox/venobox.min.js"></script>
	<script src="../../Assets/template1/assets/js/theme-pluginjs.js"></script>
	<script src="../../Assets/template1/assets/js/jquery.meanmenu.js"></script>
	<script src="../../Assets/template1/assets/js/ajax-mail.js"></script>
	<script src="../../Assets/template1/assets/js/map.js"></script>
	<script src="../../Assets/template1/assets/js/theme.js"></script>
</body>

</html>