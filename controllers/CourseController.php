<?php
class CourseController{
	public function actionCourse(){
		$doc_spo = AdminElearning::inputDocumetsSpo();
		$row = AdminHeader::headerInfo();
		

		$this->page['title'] = 'Электронное образование';
		require_once ROOT."/views/main/course.php";
		return true;
	}
}
?>