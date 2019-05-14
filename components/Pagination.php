<?php
class Pagination{
	public static function PaginationNews(){
		$db = Db::getConnection();
		$num = 2;
		if(!empty($_GET['page'])){
			$page = $_GET['page'];
		}
		else{
			$page = 1;
		}

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

}
}
?>