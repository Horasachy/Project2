<?php
class ElearningController{
	public function actionElearning(){
		$doc_spo = AdminElearning::inputDocumetsSpo();
		$row = AdminHeader::headerInfo();
		

		$this->page['title'] = 'Электронное образование';
		require_once ROOT."/views/main/elearning.php";
		return true;
	}
}
?>