<!DOCTYPE html>
<html>
<head>
	<title><?=$this->page['title'];?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>
<body>
	<div class="container"><!-- form -->
		<form class="login" method="POST" action="">
			<h4 class="h4-b">Данные аккаунта</h4>
			<label class="label_login">Ваш логин:<?=$this->page['DataLogin']?></label><br><br>
			<h4 class="h4-b">Изменение данных</h4>
			<input type="text" name="login" placeholder="Логин:"><br>

			<input type="password" name="passwordNew" placeholder="Новый пароль:"><br><br>
			<input type="password" name="password" placeholder="Старый пароль:"><br>

			<input class="submit_update" type="submit" name="submit" value="Редактировать">
			<?if(!empty($this->page['errors'])):?>
			<div class="errors">
				<?=$this->page['errors'];?>
			</div>	
			<?endif;?>
			<?if(!empty($this->page['success'])):?>
			<div class="success">
				<?=$this->page['success'];?>
			</div>	
			<?endif;?>			
		</form>
	</div><!-- /form  -->
	<script src="../../public/js/jquery.min.js"></script>
	<script src="../../public/js/all.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
</body>
</html>