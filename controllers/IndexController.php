<?php
class IndexController {
	public $pageData = array();

	//Вывод новостей с пагинацией(под рефакторинг);
	public function actionIndex()
	{
		$db = Db::getConnection();
		$num = 3;
		$page = $_GET['page'];


		$sql ="SELECT COUNT(*) FROM news";
		$stmt= $db->query($sql); 
		$posts = $stmt->fetch(PDO::FETCH_ASSOC);
		foreach ($posts as $post) {
			$posts = $post;
		}
		$total = intval(($posts - 1) / $num) + 1;
		
		$page = intval($page); 
		if(empty($page) or $page < 0) {
			$page = 1;
			} 
		  if($page > $total){
		   $page = $total; 
		}

		$start = $page * $num - $num; 
		$sql = "SELECT * FROM news LIMIT :start, :num";
		$stmt=$db->prepare($sql);
		$stmt->bindParam(':start', $start, PDO::PARAM_INT);
		$stmt->bindParam(':num', $num, PDO::PARAM_INT);
		$stmt->execute();
		while ($postrow[] = $stmt->fetch(PDO::FETCH_ASSOC));

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

// <?php 


// require 'scripts/db.php';

// $num = 1; 
// $page = $_GET['page']; 
// $result = mysql_query("SELECT COUNT(*) FROM news"); 
// $posts = mysql_fetch_row($result); 
// foreach ($posts as $post) {
// 	$posts = $post;
// }
// $total = intval(($posts - 1) / $num) + 1;
// echo $total;
// $page = intval($page); 
// if(empty($page) or $page < 0) {
// 	$page = 1;
// 	} 
//   if($page > $total){
//    $page = $total; 
// }

// $start = $page * $num - $num; 
// $result = mysql_query("SELECT * FROM news LIMIT $start, $num"); 
// while ( $postrow[] = mysql_fetch_array($result));

// 	echo "<table>"; 
// for($i = 0; $i < $num; $i++) 
// { 
// echo "<tr> 
//          <td>".$postrow[$i]['content']."</td> 
//          <td>".$postrow[$i]['date']."</td></tr> 
//        <tr><td colspan=\"2\">".$postrow[$i]['id']."</td></tr>"; 
// } 
// echo "</table>";

// // Проверяем нужны ли стрелки назад 
// if ($page != 1) $pervpage = '<a href= ./page?page=1><<</a> 
//                                <a href= ./page?page='. ($page - 1) .'><</a> '; 
// // Проверяем нужны ли стрелки вперед 
// if ($page != $total) $nextpage = ' <a href= ./page?page='. ($page + 1) .'>></a> 
//                                    <a href= ./page?page=' .$total. '>>></a>'; 

// // Находим две ближайшие станицы с обоих краев, если они есть 
// if($page - 2 > 0) $page2left = ' <a href= ./page?page='. ($page - 2) .'>'. ($page - 2) .'</a> | '; 
// if($page - 1 > 0) $page1left = '<a href= ./page?page='. ($page - 1) .'>'. ($page - 1) .'</a> | '; 
// if($page + 2 <= $total) $page2right = ' | <a href= ./page?page='. ($page + 2) .'>'. ($page + 2) .'</a>'; 
// if($page + 1 <= $total) $page1right = ' | <a href= ./page?page='. ($page + 1) .'>'. ($page + 1) .'</a>'; 

// // Вывод меню 
// echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage; 
 
// ?>