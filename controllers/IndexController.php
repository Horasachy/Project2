<?php

include_once ROOT. '/models/News.php';


class IndexController {
	public $pageData = array();

	//Вывод новостей
	public function actionIndex()
	{
		$this->pageData['title'] = "Новости";
		$newsList = array();
		$newsList = News::getNewsList();
		
		require_once(ROOT . '/views/main/index.php');
		return true;
	}

	//Вывод одной новости(отдельная страница)
	public function actionView($id)
	{
		
		if ($id) {
			$newsItem = News::getNewsItemByID($id);
			$this->pageData['title'] = $newsItem['title'];
			require_once(ROOT . '/views/news/view.php');

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

