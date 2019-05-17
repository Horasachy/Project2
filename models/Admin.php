<?class Admin{
	//Авторизация
	public static function singin($login, $password){
		$db    = Db::getConnection();
	    $salt  = '}32%JaQjFATWeld%Qo@1';
	    $password = crypt($password, $salt);
	    $sql   = "SELECT login, password FROM 
	    								 users 
	    								 WHERE 
	    								 login = ? 
	    								 AND 
	    								 password = ?
	    								 ";
	    $stmt  = $db->prepare($sql);
	    $stmt->bindParam(1, $login,    PDO::PARAM_STR);
	    $stmt->bindParam(2, $password, PDO::PARAM_STR);
	    $stmt->execute();
		return $row = ($stmt->fetch(PDO::FETCH_ASSOC))? true : false;
	}

	//Получение id_user для сессии
	public static function getId($login, $password){
		$db    = Db::getConnection();
	    $salt  = '}32%JaQjFATWeld%Qo@1';
	    $password = crypt($password, $salt);
	    $sql   = "SELECT id_user FROM users WHERE 
	    							  login = ? 
	    							  AND 
	    							  password = ?
	    							  ";
	    $stmt  = $db->prepare($sql);
	    $stmt->bindParam(1, $login,    PDO::PARAM_STR);
	    $stmt->bindParam(2, $password, PDO::PARAM_STR);
	    $stmt->execute();
		$row   = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
}