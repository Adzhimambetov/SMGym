<?php
session_start();
require_once 'vendor/connect.php';
?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stamina &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-right">
							<p class="num">Call: +01 123 456 7890</p>
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="fh5co-logo"><a href="index.php">SMGym<span>.</span></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Главная</a></li>
								<li class="active"><a href="pricing.php">Абонементы</a></li>
								<li><a href="pitanie.php">Питание</a></li>
								<li><a href="contact.php">Контакты</a></li>
						
								<!-- <li class="btn-cta"><a href="#"><span>Login</span></a></li> -->
							</ul>
						</div>
					</div>

				</div>
			</div>
		</nav>

		<div id="fh5co-pricing">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Тарифный план</h2>
						<p>Наш фитнес-клуб предоставляет 4 вида абонемента.</p>
					</div>
				</div>
				<div class="row">
					<div class="pricing">
                    <?php
                        $subscription = mysqli_query($connect, "SELECT * FROM `subscription`");
                        $subscription = mysqli_fetch_all($subscription);
                        foreach ($subscription as $subscript) {
                        ?>
						<div class="col-md-3 animate-box">
							<div class="price-box">
								<h2 class="pricing-plan"><?= $subscript[1] ?></h2>
								<div class="price"><sup class="currency">₽</sup><?= $subscript[2] ?><small><?= $subscript[3] ?> посещений/месяц</small></div>
								<?php
	                        $type = mysqli_query($connect, "SELECT * FROM `type_tr`");
	                        $type = mysqli_fetch_all($type);
	                        foreach ($type as $typ) {
                                ?>
								<ul class="classes">
									<li><?= $typ[1] ?></li>
								</ul>
								<?php
	                        }
                                ?>
								<a href="validation.php" class="btn btn-select-plan btn-sm buy" data-price="<?php $subscript[2] ?>">Купить</a>
							</div>
						</div>
						<?php
                        }
                        ?>
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);"
			role="contentinfo">
			<div class="overlay"></div>
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 fh5co-widget">
						<h3>A Little About Stamina.</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
							adipisci architecto culpa amet.</p>
						<p><a class="btn btn-primary" href="#">Become A Member</a></p>
					</div>
					<div class="col-md-8">
						<h3>Classes</h3>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<ul class="fh5co-footer-links">
								<li><a href="#">Cardio</a></li>
								<li><a href="#">Body Building</a></li>
								<li><a href="#">Yoga</a></li>
								<li><a href="#">Boxing</a></li>
								<li><a href="#">Running</a></li>
							</ul>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-6">
							<ul class="fh5co-footer-links">
								<li><a href="#">Boxing</a></li>
								<li><a href="#">Martial Arts</a></li>
								<li><a href="#">Karate</a></li>
								<li><a href="#">Kungfu</a></li>
								<li><a href="#">Basketball</a></li>
							</ul>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-6">
							<ul class="fh5co-footer-links">
								<li><a href="#">Badminton</a></li>
								<li><a href="#">Body Building</a></li>
								<li><a href="#">Teams</a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
							<small class="block">Designed by <a href="http://freehtml5.co/"
									target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/"
									target="_blank">Unsplash</a></small>
						</p>
						<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

    <div class="modal fade" tabindex="-1" id="cart">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Оформление абонемента</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="buy" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Ваше ФИО</label>
    <input type="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="subscrib" class="form-label">Выбранный абонемент</label>
    <input type="text" class="form-control" id="subscrib" readonly>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Цена</label>
    <input type="text" class="form-control" id="price" readonly>
  </div>
  <button type="submit" class="btn btn-primary">Купить</button>
</form>
      </div>
    </div>
  </div>
</div>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script	src="js/bye.js"></script>

</body>

</html>