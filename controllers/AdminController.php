<?php
class AdminController{
	public function actionLogin(){
		if(isset($_POST['submit'])){
			$login 	  = $_POST['login'];
			$password = $_POST['password'];

			if (empty($login)) {
				$this->page['errors'] = "Неверный логин или пароль!";
			}
			if (empty($password)) {
				$this->page['errors'] = "Неверный логин или пароль!";
				// $this->page['errors'] = "Пароль должен быть </br> больше 6 символов!";
			}
		
			if(Admin::singin($login, $password)){
				$row = Admin::getId($login, $password);
				$id = $row['id_user'];
				$_SESSION['admin'] = $id;
				header('Location:/');				
			}
		}	
		$this->page['title'] = 'Авторизация';
		require_once(ROOT . '/views/admin/login.php');
		return true;
	}
}
?>