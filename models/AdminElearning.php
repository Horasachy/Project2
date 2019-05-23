<?php
class AdminElearning{
	public static function addDocumentSpo($name, $documentNameSpo, $type, $data){
		$db  = Db::getConnection();
		$sql = "INSERT INTO spo_elearning(
									name,
									mime,
									data,
									doc_name) 
									VALUES 
									(?, ?, ?, ?)";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $name, 			  PDO::PARAM_STR);
		$stmt->bindParam(2, $documentNameSpo, PDO::PARAM_STR);
		$stmt->bindParam(3, $type, 			  PDO::PARAM_STR);
		$stmt->bindParam(4, $data);
		
		return $stmt->execute();
	}

	public static function viewDocumentSpo($id){
		$db    = Db::getConnection();
		$sql   = 'SELECT * FROM 
						   spo_elearning 
					       WHERE 
						   id= ?';
		$stmt  = $db->prepare($sql);
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		$stmt->execute();
		$document = $stmt->fetch();
		return $document;
	}

	public static function inputDocumetsSpo(){
		$db      	  = Db::getConnection();
		$documentsRow = array();
		$sql     	  = "SELECT * FROM spo_elearning";
		$stmt         = $db->prepare($sql);
		$stmt->execute();
		$i = 0;
		while($row = $stmt->fetch(PDO::FETCH_BOTH)){
			$documentsSpo[$i]['id'] 	   =  $row['id'];
			$documentsSpo[$i]['name'] 	   =  $row['name'];
			$documentsSpo[$i]['mime'] 	   =  $row['mime'];
			$documentsSpo[$i]['data'] 	   =  $row['data'];
			$documentsSpo[$i]['doc_name']  =  $row['doc_name'];
			$i++;
		}
		return $documentsSpo;
	}
	public static function removeDocumentSpo($id){
		$db  = Db::getConnection();
		$sql = 'DELETE FROM spo_elearning WHERE id = ?';
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		return $stmt->execute();
	}
}
?>