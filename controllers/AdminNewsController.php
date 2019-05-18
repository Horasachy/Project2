<?php
class AdminNewsController {
	//Вывод новостей с пагинацией;
	public function actionIndex(){	
		//Обнавление контактной информации
		AdminNewsController::UpdateContactInfo();
		//Добавление новости
		AdminNewsController::addNews();
		//Удаление новости
		AdminNewsController::removeNews();
		//Проверка сессии
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
		//render
		$row = AdminHeader::headerInfo();
		$this->page['title'] = "Главная";
		require_once(ROOT . '/views/admin/index.php');
		return true;
	}
	//добавление новости
	public static function addNews(){
		if(!empty($_POST['addNews'])){
			$submit   = $_POST['addNews'];
		}
		if(!empty($_POST['title'])){
			$title    = $_POST['title'];
		}
		if(!empty($_POST['short_content'])){
			$short_content    = $_POST['short_content'];
		}
		if(!empty($_POST['content'])){
			$content    = $_POST['content'];
		}
		if(!empty($_POST['author_name'])){
			$author_name    = $_POST['author_name'];
		}
		if (isset($submit)) {
			if(AdminNews::addNews($title, $short_content, $content, $author_name)){
				header("Location:/adminNews");
			}
		}
		return true;

	}
	//Удаление новости
	public static function removeNews(){
		if(!empty($_POST['removeNews'])){
			$submit  = $_POST['removeNews'];
		}
		if(!empty($_POST['idNews'])){
			$id   	 = $_POST['idNews'];
		}
		if (isset($submit)) {
			if(AdminNews::removeNews($id)){
				header("Location:/adminNews");
			}
		}
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
	//Апдейт контактной информации
	public static function UpdateContactInfo(){
		if(!empty($_POST['headerInfo'])){
			$submit   = $_POST['headerInfo'];
		}
		if(!empty($_POST['phone'])){
			$phone    = $_POST['phone'];
		}
		if(!empty($_POST['email'])){
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
		return true;
	}
}
?>