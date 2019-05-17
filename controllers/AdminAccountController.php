<?php
	class AdminAccountController{
		public function actionAccount(){
			Session::sessionExists();
			$id         = $_SESSION['admin'];
			$data  	    = AdminAccount::getData($id);
			$dataLogin  = $data['login'];

			if(!empty($_POST)){
				$submit      = $_POST['submit'];
				$login       = $_POST['login'];
				$password    = $_POST['password'];
				$passwordNew = $_POST['passwordNew'];
			}

			if (isset($submit)) {
				//Апдейт логина
				if (!empty($login)) {
					if (!AdminAccount::checkLogin($login)) {
						if(AdminAccount::checkPassword($password)){
							if(AdminAccount::updateLogin($id, $login)){
								$this->page['success']  = 'Данные успешно изменены!';
							}
						}
						else{
							$this->page['errors']  = 'Неверный пароль!';
						}
					}
					else{
						$this->page['errors']  = 'Этот логин уже используется!';
					}
				}

				//Апдейт пароля
				if (!empty($passwordNew)) {
					if (!AdminAccount::checkPasswordNew($passwordNew)) {
						if(AdminAccount::checkPassword($password)){
							if(AdminAccount::updatePassword($id, $passwordNew)){
								$this->page['success']  = 'Данные успешно изменены!';
							}
						}
						else{
							$this->page['errors']  = 'Неверный пароль!';
						}
					}
					else{
						$this->page['errors']  = 'Этот пароль уже используется!';
					}
				}
				
			}


			//rendor
			$this->page['DataLogin']  = $dataLogin;
			$this->page['title'] 	  = 'Аккаунт';
			require_once(ROOT . '/views/admin/account.php');
			return true;
		}
	}
?>