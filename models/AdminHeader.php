<?php
class AdminHeader{
		public static function headerInfo(){
		$db      = Db::getConnection();
		$sql     = "SELECT * FROM contacts";
		$stmt    = $db->query($sql);
		$row  	 = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
}

?>