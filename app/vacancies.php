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

	<title>Вакансии</title>

	<!-- bootstrap grid css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap-grid.min.css">

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>

	<div class="page vacancies-page">


		<!-- header -->
		<?php include("blocks/header.php");?>
		<!-- header -->

		<div class="overlay"></div>




		<!-- content -->
		<main class="content">


			<!-- page-banner -->
			<section class="page-banner text-center" style="background-image: url('img/test2.jpg')">
				<div class="container">
					<h1 class="page-title">Вакансии</h1>
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
							<a rel="nofollow" itemprop="item" title="Вакансии" href="#">
								<span itemprop="name">Вакансии</span>
								<meta itemprop="position" content="3">
							</a>
						</span>
					</div>
				</div>
			</section>
			<!-- page-banner end -->


			<!-- vacancies -->
			<section class="vacancies">

				<div class="container">

					<div class="vacancy">

						<h2 class="page-subtitle">Специалист коммерческого отдела</h2>

						<div class="row">

							<div class="col-12 col-xl-7">
	
								
								<div class="vacancy__descr">
									<h3 class="page-text page-text--accented">Обязанности:</h3>
									<ul class="page-text">
										<li>Обработка заявок отдела продаж;</li>
										<li>Поиск и ведение новых клиентов (переговоры с клиентами, согласование сроков, условий);</li>
										<li>Консультация клиентов по ассортименту и услугам компании;</li>
										<li>Контроль отгрузки, доставки продукции.</li>
									</ul>
								</div>
	
								<div class="vacancy__descr">
									<h3 class="page-text page-text--accented">Требования:</h3>
									<ul class="page-text">
										<li>Оконченное высшее образование;</li>
										<li>Навыки продаж (опыт на рынке B2B будет преимуществом);</li>
										<li>Знание ПК: MS Office‚ знание 1С будет преимуществом;</li>
										<li>Навыки делового общения, внимательность к деталям;</li>
										<li>Контроль дебиторской задолженности;</li>
										<li>Ответственность, исполнительность, коммуникабельность.</li>
									</ul>
								</div>
	
								<div class="vacancy__descr">
									<h3 class="page-text page-text--accented">Условия:</h3>
									<ul class="page-text">
										<li>Место работы: ул. Генерала Хрулева 8 (м. Пионерская, 10 мин/пеш);</li>
										<li>График работы пн-пт‚ с 8.00 - 17.00;</li>
										<li>Официальное оформление с первого дня‚ отпуск 28 дней, оплата больничного;</li>
										<li>Стабильная заработная плата: оклад 47 500 + премии;</li>
										<li>Работа в дружном молодом коллективе;</li>
										<li>Современный офис (кофемашина в вашем распоряжении);</li>
										<li>Корпоративное обучение;</li>
										<li>Перспективы развития.</li>
									</ul>
								</div>
	
							</div>
	
							<div class="col-12 col-xl-5">

								<div class="vacancy__img">
									<img src="img/vacancy-img.jpg" alt="Вакансия" class="img-responsive"
									srcset="img/vacancy-img.jpg 1x, img/vacancy-img@2x.jpg 2x">
								</div>

								<h3 class="page-text page-text--accented">Контактная информация:</h3>
								<ul class="page-text contacts-info">
									<li><i class="contacts-ic contacts-ic-name"></i>Тихонов Владимир Юрьевич</li>
									<li><i class="contacts-ic contacts-ic-tel"></i><a href="tel:+79119067000">+7 (911) 9067000</a></li>
									<li><i class="contacts-ic contacts-ic-email"></i><a href="mailto:tihonov@baltservice.org">tihonov@baltservice.org</a></li>
								</ul>



							</div>
	
						</div>
						<!-- /.row -->

					</div>
					<!-- /.vacancy -->

				</div>
				<!-- /.container -->

			</section>
			<!-- /.vacancies -->


		
		</main>
		<!-- content end -->
	


		<!-- footer -->
		<?php include("blocks/footer.php");?>
		<!-- /.footer -->




	</div>
	<!-- /.vacancies-page -->



	<!-- popup callback -->
	<?php include("blocks/modal-callback.php");?>
	<!-- popup callback end -->

	<!-- popup thanks -->
	<?php include("blocks/modal-thanks.php");?>
	<!-- popup thanks end -->


		
	


	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<script src="js/scripts.js"></script>

</body>
</html>
