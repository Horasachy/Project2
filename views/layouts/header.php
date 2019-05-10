<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->page['title'];?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>
<body>
	<!-- Контактная информация -->
	<div class="container-fluid" style="background-color: white;">
		<div class="row">
			<div class="col-md-9">
				<div class="header_info">
					<p><i class="fa fa-phone" aria-hidden="true"></i> 123-123-123
						|| 
					<i class="fa fa-envelope" aria-hidden="true"></i> bask-email.ru</p>
				</div>
			</div>
			<div class="col-3">
				<p class="header_admin">КНОПКА ПАТОМ</p>
			</div>
		</div>
	</div>
	<!-- Лого -->
	<div class="container-fluid" style="margin-top: 10px;">
		<div class="logo">
		<img class="logo_image" src="../../public/images/logo.png">
		</div>
	</div>
	<!-- Меню -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white; margin-top: 10px;
	font-weight: bold;
	-webkit-box-shadow: 0px 5px 5px 1px rgba(0,0,0,0.23);
-moz-box-shadow: 0px 5px 5px 1px rgba(0,0,0,0.23);
box-shadow: 0px 5px 5px 1px rgba(0,0,0,0.23);">
	<a class="navbar-brand" href="#">BASK</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbar1">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">О нас</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Курсы</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Электронное образование</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Детская школа 3D-SIZE</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Что хотите найти?" aria-label="Search">
			<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Найти</button>
		</form>
	</nav>
	<!-- Конец меню -->
	

	<script src="../../public/js/jquery.min.js"></script>
	<script src="../../public/js/all.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/js/formFeedBackaJax.js"></script>