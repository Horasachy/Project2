<?php
class AdminNewsController {
	//Вывод новостей с пагинацией;
	public function actionIndex(){	
		Session::sessionExists();
		//Сколько страниц выводим
		$num = 3;
		if(!empty($_GET['page'])){
			$page = $_GET['page'];
		}
		else{
			$page = 1;
		}
		//Считаем кол-во новостей
		$posts = News::countNews();

		//Достаем значения из массива
		foreach ($posts as $post) {
			$posts = $post;
		}
		/*Высчитываем кол-во страниц
		**intval для "округления"*/
		$total = intval(($posts - 1) / $num) + 1;
		$page = intval($page);

		/*Если кол-во страниц $page
		**больше кол-во страниц $total
		**(сгенерированых страниц из подсчета 
		**кол-во новостей), то приравниваем
		**$page и $total*/ 
		if($page > $total){
		   $page = $total; 
		}

		$start = $page * $num - $num;
		$postrow = array();
		/**откуда достаем $start и сколько достаем $num**/
		$postrow = News::paginationNews($start, $num);

		if (isset($_POST['exit'])) {
			Session::logout();
		}

		//Апдейт контактной информации
		if(!empty($_POST)){
			$submit   = $_POST['headerInfo'];
			$phone    = $_POST['phone'];
			$email    = $_POST['email'];
		}
		if (isset($submit)){
			if (!empty($phone)){
				AdminHeader::updatePhone($phone);
				header("Location:/adminNews");
			}
			if (!empty($email)){
				AdminHeader::updateEmail($email);
				header("Location:/adminNews");
			}
		}

		//render
		$row = AdminHeader::headerInfo();
		$this->page['title'] = "Главная";
		require_once(ROOT . '/views/admin/index.php');
		return true;
	}

	//Вывод одной новости(отдельная страница)
	public function actionView($id){
		if ($id) {
			$newsItem = News::getNewsItemByID($id);
			$row = AdminHeader::headerInfo();
			$this->page['title'] = $newsItem['title'];
			require_once(ROOT . '/views/admin/news.php');
		}
		return true;

	}
	//Обратная связь, данные из formFeedBackaJax.js
	public function actionFeedBack(){
		$email   = $_POST['email'];
		$name    = $_POST['name'];
		$message = $_POST['message'];

		$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
		$headers = "From: $name\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
		$success = mail("misha89891@mail.ru", $subject, $message, $headers);
	}
}
?>