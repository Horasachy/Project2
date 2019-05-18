<?php
class AdminHeader{
	public static function headerInfo(){
		$db      = Db::getConnection();
		$sql     = "SELECT * FROM contacts";
		$stmt    = $db->query($sql);
		$row  	 = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
	public static function updatePhone($phone){
		$db  		 = Db::getConnection();
		$sql 		 = "UPDATE contacts SET 
									 	phone = ? 
							 		 	";
		$stmt  = $db->prepare($sql);
		$stmt->bindParam(1, $phone,  PDO::PARAM_STR);
		return $stmt->execute();	
    }
	public static function updateEmail($email){
		$db  		 = Db::getConnection();
		$sql 		 = "UPDATE contacts SET 
									 	email = ? 
							 		 	";
		$stmt  = $db->prepare($sql);
		$stmt->bindParam(1, $email,  PDO::PARAM_STR);
		return $stmt->execute();	
	}
}

?>