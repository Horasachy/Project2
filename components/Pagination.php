<?php
class Pagination{
	public static function PaginationNews(){
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
	}
}
?>