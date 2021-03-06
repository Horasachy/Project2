<?php
class AdminNews{
	public static function addNews($title, $short_content, $content, $author_name, $name, $type, $data){
		$db  = Db::getConnection();
		//Запрос
		$sql = 'INSERT INTO news(
								title, 
								short_content, 
								content, 
								author_name,
								name,
								mime,
								data) 
								VALUES 
								(?, ?, ?, ?, ?, ?, ?)';
		$stmt = $db->prepare($sql);
		//Указываем, что это строка или число
		$stmt->bindParam(1, $title,         PDO::PARAM_STR);
		$stmt->bindParam(2, $short_content, PDO::PARAM_STR);
		$stmt->bindParam(3, $content,       PDO::PARAM_STR);
		$stmt->bindParam(4, $author_name,   PDO::PARAM_STR);
		$stmt->bindParam(5, $name,		    PDO::PARAM_STR);
		$stmt->bindParam(6, $type,          PDO::PARAM_STR);
		$stmt->bindParam(7, $data);
		//Выполняем запрос
		return $stmt->execute();
	}

	public static function removeNews($id){
		$db  = Db::getConnection();
		//Запрос
		$sql = 'DELETE FROM news WHERE id = ?';
		$stmt = $db->prepare($sql);
		//Указываем, что это строка или число
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		//Выполняем запрос
		return $stmt->execute();
	}
}
?>
