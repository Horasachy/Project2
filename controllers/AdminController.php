<?php
class AdminController{
	public function actionLogin(){
		Session::noRepeatSingin();
		if(isset($_POST['submit'])){
			$login 	  = $_POST['login'];
			$password = $_POST['password'];

			if (empty($login)) {
				$this->page['errors'] = "Неверный логин или пароль!";
			}
			if (empty($password)) {
				$this->page['errors'] = "Неверный логин или пароль!";
			}
			/*Проверка на существовние логина и пароля.
			**Присваение сессии айди пользователя*/
			if(Admin::singin($login, $password)){
				$row = Admin::getId($login, $password);
				$id = $row['id_user'];
				$_SESSION['admin'] = $id;
				header('Location:/adminNews');				
			}
			else{
				$this->page['errors'] = "Неверный логин или пароль!";
			}
		}	

		//Render
		$this->page['title'] = 'Авторизация';
		require_once(ROOT . '/views/admin/login.php');
		return true;
	}
}
?>