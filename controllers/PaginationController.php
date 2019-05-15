<?php
class PaginationController{
	public function actionPage(){
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		}
		else{
			$page = 1;
		}
		$notesOnPage = 2;
		$from = ($page - 1) * $notesOnPage;

		$db = Db::getConnection();
		$sql = "SELECT * FROM news WHERE id > 0 LIMIT :from, :notesOnPage";
		$stmt=$db->prepare($sql);
		$stmt->bindParam(':from', $from, PDO::PARAM_INT);
		$stmt->bindParam(':notesOnPage', $notesOnPage, PDO::PARAM_INT);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		for($data = []; $row; $data[] = $row);
		var_dump($data);	
	}
}

?>