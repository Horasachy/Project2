<?php
class AdminAccount{
	//Проверка пароля
	public static function checkpassword($password){
	$db   = Db::getConnection();
	$salt  = '}32%JaQjFATWeld%Qo@1';
    $password = crypt($password, $salt);
	$sql  = "SELECT login FROM 
					  users 
					  WHERE
					  password = ?
					  ";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(1, $password, PDO::PARAM_STR);
	$stmt->execute();				  
	return $row = ($stmt->fetch(PDO::FETCH_ASSOC))?true :false;	
	}
	//получение данных пользователя
	public static function getData($id){
		$db   = Db::getConnection();
		$sql  = "SELECT * FROM 
						  users 
						  WHERE
						  id_user = ?
						  ";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		$stmt->execute();				  
		$row  = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
	//проверяем на одинаковость логин
	public static function checkLogin($login){
		$db   = Db::getConnection();
		$sql  = "SELECT login FROM 
						  users 
						  WHERE
						  login = ?
						  ";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $login, PDO::PARAM_STR);
		$stmt->execute();				  
		return $row = ($stmt->fetch(PDO::FETCH_ASSOC))?true :false;	
	}
	//Апдейт логина
	 public static function updateLogin($id, $login){
		$db  = Db::getConnection();
		$sql = 'UPDATE users SET 
							 login = ? 
							 WHERE 
							 id_user  = ?
							 ';
		$stmt  = $db->prepare($sql);
		$stmt->bindParam(1, $login,  PDO::PARAM_STR);
		$stmt->bindParam(2, $id, PDO::PARAM_INT);
		return $stmt->execute();
    }

	public static function checkPasswordNew($passwordNew){
		$db   = Db::getConnection();
		$sql  = "SELECT login FROM 
						  users 
						  WHERE
						  password = ?
						  ";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(1, $passwordNew, PDO::PARAM_STR);
		$stmt->execute();				  
		return $row = ($stmt->fetch(PDO::FETCH_ASSOC))?true :false;	
	}

	//Апдейт пароля
	 public static function updatePassword($id, $passwordNew){
		$db  		 = Db::getConnection();
		$salt  		 = '}32%JaQjFATWeld%Qo@1';
		$passwordNew = crypt($passwordNew, $salt);
		$sql 		 = 'UPDATE users SET 
									 password = ? 
									 WHERE 
									 id_user  = ?
							 		 ';
		$stmt  = $db->prepare($sql);
		$stmt->bindParam(1, $passwordNew,  PDO::PARAM_STR);
		$stmt->bindParam(2, $id, PDO::PARAM_INT);
		return $stmt->execute();	
    }
}

?>