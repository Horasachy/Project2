<!DOCTYPE html>
<html>
<head>
	<title><?= $this->page['title'];?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>
<body>
	<div class="container"><!-- form -->
		<form class="login" method="POST" action="">
			<h4 class="h4-b">Вход в систему</h4><br>
			<label class="label_login">Логин:</label><br>
			<input type="text" name="login" value="<?=$_POST['login'];?>"><br><br>

			<label class="label_login">Пароль:</label><br>
			<input type="password" name="password"><br>

			<input class="submit_login" type="submit" name="submit" value="Войти">
			<?if(!empty($this->page['errors'])):?>
					<div class="errors">
						<?=$this->page['errors'];?>
					</div>	
			<?endif;?>		
		</form>
	</div><!-- /form  -->
<script src="../../public/js/jquery.min.js"></script>
<script src="../../public/js/all.js"></script>
<script src="../../public/js/bootstrap.min.js"></script>
</body>
</html>