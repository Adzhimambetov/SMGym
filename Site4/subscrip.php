<?php
session_start();
require_once '../vendor/connect.php';
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMGym &mdash; путь к мечте!</title>
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

  <?php
                        $video = mysqli_query($connect, "SELECT * FROM `video`");
                        $video = mysqli_fetch_all($video);
                        foreach ($video as $vid) {
                        ?>
    <section class="u-align-center u-clearfix u-palette-3-light-2 u-section-1" id="sec-c37f">

      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <div class="u-align-left u-expanded-width-sm u-expanded-width-xs u-video u-video-1">
          
        <div class="embed-responsive embed-responsive-1">
            <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="<?= $vid[3] ?>" frameborder="0" allowfullscreen=""></iframe>
          </div>
        </div>
        <h2 class="u-text u-text-default u-text-1"><?= $vid[1] ?></h2>
        <p class="u-text u-text-2"><?= $vid[2] ?></p>
      </div>
    </section>
    <?php
                        }
                        ?>
    <section class="u-clearfix u-palette-2-light-3 u-section-2" id="sec-a61c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-left u-expanded u-video">
                  <?php
                        $video_con = mysqli_query($connect, "SELECT * FROM `video_con`");
                        $video_con = mysqli_fetch_all($video_con);
                        print_r($video_con);
                        foreach ($video_con as $videos) {
                        ?>
                    <div class="embed-responsive embed-responsive-1">
                      <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="<?= $videos[1] ?>" allowfullscreen=""></iframe>
                    </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
        
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);"
			role="contentinfo">
			<div class="overlay"></div>
			<div class="container">
				<div class="row row-pb-md">
				
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
						<small class="block">&copy; КИПУ - Симферополь 2022</small> 
						
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
  
</body></html>