<?php
class Session{
	//Проверка на существование сессии
	public static function sessionExists(){
		if(empty($_SESSION['admin'])){
			header('Location:/');
		}
	}
	/*Если пользователь авторизирован,
	**то при попытке зайти на страницу
	**логина, перенаправляем его в личный кабинет*/
	public static function 	noRepeatSingin(){
		if (!empty($_SESSION['admin'])) {
			header('Location:/adminNews');
		}
	}
	//Выход из аккаунта
	public static function logout(){
			session_destroy();
			header('Location:/');
	}
}


?>