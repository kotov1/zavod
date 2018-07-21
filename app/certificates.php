<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<meta property="og:image" content="img/opengraph.jpg">

	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">
	<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#ffffff">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<title>Сертификаты и допуски</title>

	<!-- bootstrap grid css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap-grid.min.css">


	<link rel="stylesheet" href="css/styles.css">

</head>

<body>

	<div class="page certificates-page">


		<!-- header -->
		<?php include("blocks/header.php");?>
		<!-- header -->

		<div class="overlay"></div>




		<!-- content -->
		<main class="content">


			<!-- page-banner -->
			<section class="page-banner text-center" style="background-image: url('img/test2.jpg')">
				<div class="container">
					<h1 class="page-title">Сертификаты и допуски</h1>
					<div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
						<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
							<a rel="nofollow" itemprop="item" title="Главная" href="index.php">
								<span itemprop="name">Главная</span>
								<meta itemprop="position" content="1">
							</a>
						</span>
						<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
							<a rel="nofollow" itemprop="item" title="О компании" href="#">
								<span itemprop="name">О компании</span>
								<meta itemprop="position" content="2">
							</a>
						</span>
						<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
							<a rel="nofollow" itemprop="item" title="Сертификаты и допуски" href="#">
								<span itemprop="name">Сертификаты и допуски</span>
								<meta itemprop="position" content="3">
							</a>
						</span>
					</div>
				</div>
			</section>
			<!-- page-banner end -->



			<!-- demo -->
			<section class="demo">

				<div class="container">

					<div class="demo__box">


						<div class="demo__item">
	
							<div class="demo-img demo-img--fancy">
								<a href="img/certificates/certificate1-zoom.jpg" data-fancybox="images">
									<img src="img/certificates/certificate1.jpg" alt="alt" class="img-responsive">
								</a>
							</div>
	
							<div class="demo__descr">
								<h2 class="page-subtitle demo__name">Название сертификата</h2>
								<p class="page-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
							</div>
							<!-- /.demo__descr -->
	
						</div>
						<!-- /.demo__item -->
						
						<div class="demo__item">
	
							<div class="demo-img demo-img--fancy"><img src="" alt="alt" class="img-responsive"></div>
	
							<div class="demo__descr">
								<h2 class="page-subtitle demo__name">Реквизиты завода</h2>
								<p class="page-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<!-- /.demo__descr -->
	
						</div>
						<!-- /.demo__item -->
						
						<div class="demo__item">
	
							<div class="demo-img demo-img--fancy">
								<a href="img/certificates/certificate1-zoom.jpg" data-fancybox="images">
									<img src="img/certificates/certificate1.jpg" alt="alt" class="img-responsive">
								</a>
							</div>
	
							<div class="demo__descr">
								<h2 class="page-subtitle demo__name">Название сертификата</h2>
								<p class="page-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
							</div>
							<!-- /.demo__descr -->
	
						</div>
						<!-- /.demo__item -->
						
						<div class="demo__item">
	
							<div class="demo-img demo-img--fancy"><img src="" alt="alt" class="img-responsive"></div>
	
							<div class="demo__descr">
								<h2 class="page-subtitle demo__name">Реквизиты завода</h2>
								<p class="page-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<!-- /.demo__descr -->
	
						</div>
						<!-- /.demo__item -->

					</div>
					<!-- /.demo__box -->
						



				</div>
				<!-- /.container -->

			</section>
			<!-- /.demo -->





		</main>
		<!-- content end -->
	


		<!-- footer -->
		<?php include("blocks/footer.php");?>
		<!-- /.footer -->




	</div>
	<!-- /.certificates-page -->





	<!-- popup callback -->
	<?php include("blocks/modal-callback.php");?>
	<!-- popup callback end -->

	<!-- popup thanks -->
	<?php include("blocks/modal-thanks.php");?>
	<!-- popup thanks end -->


		



		<!-- svg sprite -->
		<div class="svg-sprite">
			<?php echo file_get_contents("img/svg-icons/svg-sprite.svg"); ?>
		</div>


	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>
