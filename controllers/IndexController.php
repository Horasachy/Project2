<?php

include_once ROOT. '/models/News.php';


class IndexController {
	public $pageData = array();
	public function actionIndex()
	{
		$this->pageData['title'] = "Новости";
		$newsList = array();
		$newsList = News::getNewsList();
		
		require_once(ROOT . '/views/main/index.php');
		return true;
	}

	public function actionView($id)
	{
		
		if ($id) {
			$newsItem = News::getNewsItemByID($id);
			$this->pageData['title'] = $newsItem['title'];
			require_once(ROOT . '/views/news/view.php');

		}
		
		return true;

	}

}

