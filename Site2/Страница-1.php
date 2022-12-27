<?php
session_start();
require_once '../vendor/connect.php';
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stamina &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Страница 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Страница-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.2.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Страница 1">
    <meta property="og:type" content="website">
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
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

  <body class="u-body u-xl-mode" data-lang="ru">
  <nav class="fh5co-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-right">
							<p class="num">+79781223502</p>
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
								<li class="active"><a href="index.php">Главная</a></li>
								<li><a href="../pricing.php">Абонементы</a></li>
                                <li><a href="Site2/Страница-1.php">Питание</a></li>
								<li><a href="../contact.php">Контакты</a></li>
								<li><a href="../vendor/logout.php">Выйти</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</nav>

    <section class="u-clearfix u-gradient u-section-1" id="sec-d8b9">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-1"> Спортивные рационы</h3>
        <p class="u-text u-text-2"> Если Вы активно занимаетесь спортом, Вам необходим особый режим питания и особый спортивный рацион. Активный образ жизни требует большего количества калорий и продуктов с повышенным содержанием белка, необходимого для строительства мышечной ткани. Кроме того, при регулярных тренировках необходимо соблюдать определенные правила питания.</p>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-3cfc">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          <?php
                        $nutrition = mysqli_query($connect, "SELECT * FROM `nutrition`");
                        $nutrition = mysqli_fetch_all($nutrition);
                        
                        foreach ($nutrition as $nutrit) {
                        ?>
            <div class="u-border-2 u-border-grey-75 u-container-style u-image u-list-item u-radius-47 u-repeater-item u-shape-round u-image-1" data-image-width="1585" data-image-height="1080">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h3 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-1"><?= $nutrit[1] ?></h3>
                <p class="u-text u-text-white u-text-2"> <?= $nutrit[3] ?></p>
                <h3 class="u-align-center u-text u-text-white u-text-3">30 дней<br>
                </h3>
                <h3 class="u-align-center u-text u-text-white u-text-4"><?= $nutrit[2] ?> руб</h3>
                <a class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-3-light-1 u-radius-50 u-btn-1">КУПИТЬ ПРОГРАММУ</a>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>

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
								<li><a href="#">Кардио</a></li>
								
								<li><a href="#">Йога</a></li>
								<li><a href="#">Бокс</a></li>
								<li><a href="#">Бег</a></li>
							</ul>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-6">
							<ul class="fh5co-footer-links">
								<li><a href="#">Бокс</a></li>
								
								<li><a href="#">Карате</a></li>
								<li><a href="#">Кунфу</a></li>
								<li><a href="#">Баскетбол</a></li>
							</ul>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-6">
							<ul class="fh5co-footer-links">
								<li><a href="#">Бадминтон</a></li>
								<li><a href="#">Бодибилдинг</a></li>
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
        <h5 class="modal-title">Абонемент куплен</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
    <script src="../js/bye.js"></script>

    
</body></html>