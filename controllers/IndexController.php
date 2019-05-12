<?php
class IndexController {
	public $pageData = array();

	//Вывод новостей с пагинацией(под рефакторинг);
	public function actionIndex()
	{
		$db = Db::getConnection();
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}
		else{
			$page = 1;
		}
		$notesOnPage = 3;
		$from = ($page - 1) * $notesOnPage;
		
		$sql = "SELECT * FROM news WHERE id > 0 LIMIT :from, :notesOnPage";
		$stmt=$db->prepare($sql);
		$stmt->bindParam(':from', $from, PDO::PARAM_INT);
		$stmt->bindParam(':notesOnPage', $notesOnPage, PDO::PARAM_INT);
		$stmt->execute();
		for($data = []; $row = $stmt->fetch(PDO::FETCH_ASSOC); $data[] = $row);


		$sql = "SELECT COUNT(*) as count FROM news";
		$stmt= $db->query($sql);
		$count = $stmt->fetch(PDO::FETCH_ASSOC);
		$pagesCount = ceil($count['count'] / $notesOnPage);


		$this->page['title'] = "Главная";
		require_once(ROOT . '/views/main/index.php');
		return true;
	}

	//Вывод одной новости(отдельная страница)
	public function actionView($id)
	{
		
		if ($id) {
			$newsItem = News::getNewsItemByID($id);
			$this->page['title'] = $newsItem['title'];
			require_once(ROOT . '/views/main/news.php');

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

