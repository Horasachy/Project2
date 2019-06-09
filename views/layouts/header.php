<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->page['title'];?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../public/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
</head>
<body>
	<!-- Контактная информация -->

	<header class="header-top">
		<div class="container">
			<div class="row">
				<ul class="header_info">
					<li><i class="fa fa-phone" aria-hidden="true"></i> <?=$row['phone'];?></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a style="color: white; text-decoration: none;" href="mailto:<?=$row['email'];?>"> <?=$row['email'];?></a> </p></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Лого -->

		<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="logo">
					<a href="/"><img class="logo_image" src="../../public/images/logo_green.png"></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="logo2">
					<p>
						<center>САЙТ</center>
						<center>ДОПОЛНИТЕЛЬНОГО</center>
						<center>ОБРАЗОВАНИЯ</center>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Меню -->
	<div class="clr-full">	
		<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="/">BASK</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about">О нас</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/course">Курсы</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/elearning">Электронное образование</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Детская школа 3D-SIZE</a>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Что хотите найти?" aria-label="Search">
				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Найти</button>
			</form>
		</div>
	</nav>		
	</div>
</div>
</div>

		<!-- Конец меню -->