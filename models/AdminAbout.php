<?php
class AdminAbout{
	public static function UpdateCont($contacts){
		$db  = Db::getConnection();
		$sql = "UPDATE about_contacts SET 
								contacts = ? 
							 	";
		$stmt  = $db->prepare($sql);
		$stmt->bindParam(1, $contacts,  PDO::PARAM_STR);
		return $stmt->execute();	
	}

	public static function viewContacts(){
		$db   = Db::getConnection();
		$sql  = "SELECT * FROM about_contacts";
		$stmt = $db->query($sql);
		$row  = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	public static function addDocuments($name, $type, $data, $filename){
		$db  = Db::getConnection();
		//Запрос
		$sql = 'INSERT INTO about_documents(
								name,
								mime,
								data,
								doc_name) 
								VALUES 
								(?, ?, ?, ?)';
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $name, PDO::PARAM_STR);
		$stmt->bindParam(2, $type, PDO::PARAM_STR);
		$stmt->bindParam(3, $data);
		$stmt->bindParam(4, $filename, PDO::PARAM_STR);
		return $stmt->execute();
	}

	public static function viewDocuments(){
		$db      	  = Db::getConnection();
		$documentsRow = array();
		$sql     	  = "SELECT * FROM about_documents";
		$stmt         = $db->prepare($sql);
		$stmt->execute();
		$i = 0;
		while($row = $stmt->fetch(PDO::FETCH_BOTH)){
			$documentsRow[$i]['id']   	  =  $row['id'];
			$documentsRow[$i]['name'] 	  =  $row['name'];
			$documentsRow[$i]['mime'] 	  =  $row['mime'];
			$documentsRow[$i]['data'] 	  =  $row['data'];
			$documentsRow[$i]['doc_name'] =  $row['doc_name'];
			$i++;
		}
		return $documentsRow;
	}
	public static function viewDocument($id){
		$db    = Db::getConnection();
		$sql   = 'SELECT * FROM 
						   about_documents 
					       WHERE 
						   id= ?';
		$stmt  = $db->prepare($sql);
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		$stmt->execute();
		$document = $stmt->fetch();
		return $document;
	}
	public static function removeDocuments($id){
		$db  = Db::getConnection();
		$sql = 'DELETE FROM about_documents WHERE id = ?';
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		return $stmt->execute();
	}


public static function addAccordion($accordion_title, $accordion_content){
		$db  = Db::getConnection();
		//Зап$рос
		$sql = 'INSERT INTO about_accordion(
								accordion_title,
								accordion_content) 
								VALUES 
								(?, ?)';
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $accordion_title, PDO::PARAM_STR);
		$stmt->bindParam(2, $accordion_content, PDO::PARAM_STR);
		return $stmt->execute();
	}

	public static function viewAccordion(){
		$db      	  = Db::getConnection();
		$documentsRow = array();
		$sql     	  = "SELECT * FROM about_accordion ORDER BY id ASC";
		$stmt         = $db->prepare($sql);
		$stmt->execute();
		$i = 0;
		while($row = $stmt->fetch(PDO::FETCH_BOTH)){
			$accordionRow[$i]['id']   				=  $row['id'];
			$accordionRow[$i]['accordion_title'] 	=  $row['accordion_title'];
			$accordionRow[$i]['accordion_content']  =  $row['accordion_content'];
			$i++;
		}
		return $accordionRow;
	}
	public static function RemoveAccordion($id){
		$db  = Db::getConnection();
		$sql = 'DELETE FROM about_accordion WHERE id = ?';
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		return $stmt->execute();
	}
}
?>