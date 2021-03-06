<?php
class News{
	//вывод одной новости
	public static function getNewsItemByID($id){
		$id 		  = intval($id);
		if ($id) {
			$db       = Db::getConnection();
			$result   = $db->query('SELECT * FROM news 
												  WHERE 
												  id=' .$id
								  );
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$newsItem = $result->fetch();
			return $newsItem;
		}
	}

	//подсчетновостей
	public static function countNews(){
		$db    = Db::getConnection();
		$sql   = "SELECT COUNT(*) FROM news";
		$stmt  = $db->query($sql);
		$posts = $stmt->fetch();
		return $posts;
	}

	//вывод новостей с пагинацией
	public static function paginationNews($start, $num){
		$db      = Db::getConnection();
		$postrow = array();
		$sql     = "SELECT * FROM news ORDER BY id DESC LIMIT :start, :num";
		$stmt    = $db->prepare($sql);
		$stmt->bindParam(':start', $start, PDO::PARAM_INT);
		$stmt->bindParam(':num',  	 $num, PDO::PARAM_INT);
		$stmt->execute();
		$i = 0;
		while($row = $stmt->fetch(PDO::FETCH_BOTH)){
			$postrow[$i]['mime'] =  $row['mime'];
			$postrow[$i]['data'] =  $row['data'];
			$postrow[$i]['title'] =  $row['title'];
			$postrow[$i]['author_name'] = $row['author_name'];
			$postrow[$i]['date'] = $row['date'];
			$postrow[$i]['short_content'] = $row['short_content'];
			$postrow[$i]['id'] = $row['id'];
			$i++;
		}
		return $postrow;
	}
}